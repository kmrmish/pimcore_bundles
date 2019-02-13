<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */
namespace AppBundle\EventListener;
use Pimcore\Config;
use \Pimcore\Model\WebsiteSetting;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Model\DataObject\Product; 
class ImageUploadListener
{
    public static $customImageUploadClass = 'CustomImageUploadClass';

    public static $cdnPathClass = 'CdnPathClass';

    /**
     * @param DataObjectEvent $event
     */
    public function onObjectPreUpdate(DataObjectEvent $event)
    {
        if ($event instanceof DataObjectEvent) {
            /* current product object */
            $object = $event->getObject();
            if($this->getContainer()->hasParameter(self::$customImageUploadClass)){
                $CustomImageUploadClass = $this->getContainer()->getParameter(self::$customImageUploadClass);
                if ($object instanceof $CustomImageUploadClass) {
                    $object = $this->createCustomImages($object, $this->getContainer()->getParameter('MainImageUploadField'), 'MainImageFields', 'productMainImageUploads');
                    $object = $this->createCustomImages($object, $this->getContainer()->getParameter('ImageGalleryUploadField'), 'ImageGalleryFields', 'productImageGalleryUploads');
                    $object->update(true);

                }
            }
            
        }
    }

    /**
     * @param DataObjectEvent $event
     */
    public function onObjectPostUpdate(DataObjectEvent $event)
    {
        if ($event instanceof DataObjectEvent) {
            /* current product object */
            $object = $event->getObject();
            if($this->getContainer()->hasParameter(self::$customImageUploadClass)){
                $CustomImageUploadClass = $this->getContainer()->getParameter(self::$customImageUploadClass);
                if ($object instanceof $CustomImageUploadClass) {
                    $object = $this->updateCdnUrls($object,'CdnPathsMain',$this->getContainer()->getParameter('MainImageUploadField'), 'MainImageFields');
                    $object = $this->updateCdnUrls($object,'CdnPathsGallery',$this->getContainer()->getParameter('ImageGalleryUploadField'), 'ImageGalleryFields');
                }
            }
            
        }
        $object->update(true);
    }

    public function updateCdnUrls($object,$targetField, $uploadField, $thumbConfigKey){
        $allImageFields = $this->getImageFieldsFromConfiguration($uploadField, $thumbConfigKey);
        $cdnUrlsCollection = new \Pimcore\Model\DataObject\Fieldcollection();
        foreach ($allImageFields as $field) {
            $sourceFieldGetter = 'get'.$field;
            $img = $object->$sourceFieldGetter();
            if($img instanceof \Pimcore\Model\Asset\Image){
                $cdnUrlsCollection->add($this->getCdnUrlCollectionItemFromImage($img));
            } else if($img instanceof \Pimcore\Model\DataObject\Data\ImageGallery){
                foreach ($img->getItems() as $key => $galleryItem) {
                   $galleryImage = $galleryItem->getImage();
                   $cdnUrlsCollection->add($this->getCdnUrlCollectionItemFromImage($galleryImage));
                }
            }
            
        }
        $targetFieldSetter = 'set'.$targetField;
        if(count($cdnUrlsCollection->getItems())){
            $object->$targetFieldSetter($cdnUrlsCollection);    
            $targetFieldGetter = 'get'.$targetField;
        } else {
            $object->$targetFieldSetter(null);
        }
        
        return $object;

    }

    public function getCdnUrlCollectionItemFromImage($image){
        //$cdnBaseUrl = 'https://'.AKAMAI_HOST.'/'.AKAMAI_CP_CODE.str_replace('akm://','/',PIMCORE_ASSET_DIRECTORY);
        $cdnBaseUrl = 'https://abc';
        $cdnPathClass = $this->getContainer()->getParameter(self::$cdnPathClass);
        $item = new $cdnPathClass();
        $cdnPathsConfig = $this->getContainer()->getParameter('CdnPathFields');
        foreach($cdnPathsConfig as $cdnField => $thumbnailArray){
            $setter = 'set'.$cdnField;
            $thumbnailName = $thumbnailArray['thumbnail'];
            $item->$setter($cdnBaseUrl.$image->getThumbnail($thumbnailName)->getPath());
        }
        return $item;
    }

    public function getImageFieldsFromConfiguration($uploadField, $thumbConfigKey){
        $allImageFields = array($uploadField);
        $thumbConfig          = $this->getContainer()->getParameter($thumbConfigKey);
        foreach ($thumbConfig as $field => $thumbnailArray) {
           $allImageFields[] = $field;
        }
        return $allImageFields;
    }
    
    public function createCustomImages($object, $uploadField, $thumbConfigKey, $parentFolderKey)
    {
        if ($this->getContainer()->hasParameter($thumbConfigKey)) {
            $object                = $this->getConfiguredImages($object, $uploadField, $thumbConfigKey, $parentFolderKey);
        }
    $object->update(true);
        return $object;
    }
    
    public function getConfiguredImages($object, $uploadField, $thumbConfigKey, $parentFolderKey)
    {
        $uploadFieldGetter = 'get' . $uploadField;
        $currentImage      = $object->$uploadFieldGetter();
        if ($this->isImageUploadedNotEmpty($currentImage)) {
            $object = $this->createAllThumbnails($object, $currentImage,$thumbConfigKey, $parentFolderKey);
        } else {
            $object = $this->deleteAllThumbails($object, $currentImage, $thumbConfigKey);
        }
        return $object;
    }
    
    public function createAllThumbnails($object, $currentImage, $thumbConfigKey, $parentFolderKey)
    {
        $thumbConfig          = $this->getContainer()->getParameter($thumbConfigKey);
        $currentUploadedImage = $this->getCurrentUploadedImage($currentImage);
        foreach ($thumbConfig as $field => $thumbnailArray) {
            $thumbnail = $thumbnailArray['thumbnail'];
            $setter    = 'set' . $field;
            if ($currentUploadedImage->getThumbnail($thumbnail)) {
                $object = $this->createAndSetCustomImages($currentImage, $object, $setter, $thumbnail, $parentFolderKey);
            }
        }
        return $object;
    }

    public function createThumbnail($image, $thumbnailName, $object, $parentFolderKey)
    {
        $currentImageParent = $image->getParent();
        $parent             = $this->getParentFolder($parentFolderKey);
        if ($currentImageParent != $parent) {
            /* check if current thumbnail image exists or not */
            $thumbName = $thumbnailName . '-' . $image->getfilename();
            
            /* if image already exits, delete the image first and then upload */
            $thumbPath     = $image->getThumbnail($thumbnailName)->getFileSystemPath();
            $thumbTreePath = $parent->getFullPath() . '/' . $thumbName;
            $thumbObj      = \Pimcore\Model\Asset::getByPath($thumbTreePath);
            if (!$thumbObj) {
                $thumbObj = new \Pimcore\Model\Asset\Image();
                $thumbObj->setFilename($thumbName);
                $thumbObj->setData(file_get_contents($thumbPath));
                $thumbObj->setParent($parent);
                $thumbObj->save();
            }
            return $thumbObj;
        }
        return false;
    }

    public function createAndSetCustomImages($uploadedImage, $object, $setter, $thumbnail, $parentFolderKey)
    {
        if ($uploadedImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery) {
            $imageCollectionArray = array();
            foreach ($uploadedImage->getItems() as $key => $galleryItem) {
                $newImage      = $this->createThumbnail($galleryItem->getImage(), $thumbnail, $object, $parentFolderKey);
                $advancedImage = new \Pimcore\Model\DataObject\Data\Hotspotimage();
                $advancedImage->setImage($newImage);
                $imageCollectionArray[] = $advancedImage;
            }
            $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery($imageCollectionArray));
        } else if ($uploadedImage instanceof \Pimcore\Model\Asset\Image) {
            /* creating new image as per corresponding thumbnail configuration */
            $newImage = $this->createThumbnail($uploadedImage, $thumbnail, $object, $parentFolderKey);
            if ($newImage) {
                /* saving the image in product's respective main image field */
                $object->$setter($newImage);
            }
        }
        return $object;
    }
    
    public function deleteAllThumbails($object, $currentImage, $thumbConfigKey)
    {
        $thumbConfig          = $this->getContainer()->getParameter($thumbConfigKey);
        foreach ($thumbConfig as $field => $thumbnailArray) {
            $object = $this->deleteThumbnail($currentImage, $object, $field);
        }
        return $object;
    }
    
    public function deleteThumbnail($currentImage, $object, $field)
    {
        $setter             = 'set' . $field;
        $getter             = 'get' . $field;
        $currentCustomImage = $object->$getter();
        if ($currentCustomImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery) {
            $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery(array()));
        } else if ($currentCustomImage instanceof \Pimcore\Model\Asset\Image) {
            $object->$setter('');
        }
        return $object;
    }

    public function getCurrentUploadedImage($currentImage)
    {
        if ($currentImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery) {
            $currentUploadedImage = end($currentImage->getItems())->getImage();
        } else if ($currentImage instanceof \Pimcore\Model\Asset\Image) {
            $currentUploadedImage = $currentImage;
        }
        return $currentUploadedImage;
    }
    
    public function isImageUploadedNotEmpty($currentImage)
    {
        $imageUploadFlag = false;
        if ($currentImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery && count($currentImage->getItems()) && end($currentImage->getItems())->getImage()) {
            $imageUploadFlag = true;
        } else if ($currentImage instanceof \Pimcore\Model\Asset\Image) {
            $imageUploadFlag = true;
        }
        return $imageUploadFlag;
    }
    
    public function getParentFolder($key)
    {
        $uploadFolder = Config::getWebsiteConfig()->get($key);
        if (!$uploadFolder) {
            $uploadFolder = \Pimcore\Model\Asset::getByPath("/");
        }
        return $uploadFolder;
    }


    public function getContainer()
    {
        $container = \Pimcore::getContainer();
        return $container;
    }


}
