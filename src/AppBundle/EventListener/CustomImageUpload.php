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
use AppBundle\Model\DefaultProduct;

class CustomImageUpload
{
    /**
     * @param DataObjectEvent $event
     */
    public function onObjectPreUpdate(DataObjectEvent $event)
    {
        if ($event instanceof DataObjectEvent) {
        	/* current product object */
            $object = $event->getObject(); 
            if($object instanceof DefaultProduct){
                $object = $this->createCustomImages($object,'main','MainImageFields','productMainImageUploads');
                $object = $this->createCustomImages($object,'gallery','ImageGallaryFields','productImageGallaryUploads');   
            }
        }
    }

    
    public function createCustomImages($object, $uploadField, $thumbConfigKey, $parentFolderKey){
        $uploadFieldGetter = 'get'.$uploadField;
        $container = \Pimcore::getContainer();
        if($container->hasParameter($thumbConfigKey)){
            $thumbConfig = $container->getParameter($thumbConfigKey);
            $imageUploadsFolder = $this->getParentFolder($parentFolderKey);
            $currentImage = $object->$uploadFieldGetter();
            $object = $this->getConfiguredImages($object, $currentImage, $thumbConfig, $imageUploadsFolder);
        }

        return $object;
    }

    public function getConfiguredImages($object, $currentImage, $thumbConfig, $imageUploadsFolder){
        if($this->isImageUploadedNotEmpty($currentImage)){
            $object = $this->createAllThumbnails($thumbConfig, $object, $currentImage);
        } else {
            $object = $this->deleteAllThumbails($thumbConfig, $object, $currentImage);
        }
        return $object;
    }

    public function createAllThumbnails($thumbConfig, $object, $currentImage){
        $currentUploadedImage = $this->getCurrentUploadedImage($currentImage);
        foreach ($thumbConfig as $field => $thumbnailArray){
           $thumbnail = $thumbnailArray['thumbnail'];
           $setter = 'set'.$field;
           if($currentUploadedImage->getThumbnail($thumbnail)){
                $object = $this->createAndSetCustomImages($currentImage, $object, $setter, $thumbnail, $imageUploadsFolder);
           }
        }
        return $object;
    }

    public function deleteAllThumbails($thumbConfig, $object, $currentImage){
        foreach ($thumbConfig as $field => $thumbnailArray){
            $setter = 'set'.$field;
            $object = $this->deleteThumbnail($currentImage, $object, $setter);
        }
        return $object;
    }

    public function deleteThumbnail($currentImage, $object, $setter){
        if($currentImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery){
            $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery(array()));    
        } else if($currentImage instanceof \Pimcore\Model\Asset\Image){
            $object->$setter('');
        }
        return $object;
    }

    public function getCurrentUploadedImage($currentImage){
        if($currentImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery){
            $currentUploadedImage = end($currentImage->getItems())->getImage();  
        } else if($currentImage instanceof \Pimcore\Model\Asset\Image){
            $currentUploadedImage = $currentImage;
        }
        return $currentUploadedImage;
    }

    public function isImageUploadedNotEmpty($currentImage)
    {
        $imageUploadFlag = false;
        if($currentImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery && count($currentImage->getItems()) && end($currentImage->getItems())->getImage()){
            $imageUploadFlag = true;
        } else if($currentImage instanceof \Pimcore\Model\Asset\Image){
            $imageUploadFlag = true;
        }
        return $imageUploadFlag;
    }

    public function createThumbnail($image, $thumbnailName, $parent, $object)
    {
        $currentImageParent = $image->getParent();
        if($currentImageParent != $parent){
            
            /* check if current thumbnail image exists or not */
            $thumbName = $thumbnailName.'-'.$image->getfilename();

            /* if image already exits, delete the image first and then upload */
            $thumbPath = $image->getThumbnail($thumbnailName)->getFileSystemPath();
            $thumbTreePath = $parent->getFullPath().'/'.$thumbName;
            $thumbObj = \Pimcore\Model\Asset::getByPath($thumbTreePath);
            if(!$thumbObj){
                $thumbObj = new \Pimcore\Model\Asset();
                $thumbObj->setFilename($thumbName);
                $thumbObj->setData(file_get_contents($thumbPath));
                $thumbObj->setParent($parent);
                $thumbObj->save();
            }
            return $thumbObj;
        }
        return false;

    }


    public function createAndSetCustomImages($uploadedImage, $object, $setter, $thumbnail, $parentFolder){
        if($uploadedImage instanceof \Pimcore\Model\DataObject\Data\ImageGallery){
            $imageCollectionArray = array();
            foreach ($uploadedImage->getItems() as $key => $galleryItem) {
                $newImage = $this->createThumbnail($galleryItem->getImage(),$thumbnail, $parentFolder, $object);
                $advancedImage = new \Pimcore\Model\DataObject\Data\Hotspotimage();
                $advancedImage->setImage($newImage);
                $imageCollectionArray[] = $advancedImage;
            }
            $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery($imageCollectionArray));
        } else if($uploadedImage instanceof \Pimcore\Model\Asset\Image){
            /* creating new image as per corresponding thumbnail configuration */
            $newImage = $this->createThumbnail($uploadedImage,$thumbnail, $parentFolder, $object);
            if($newImage){
                /* saving the image in product's respective main image field */
                $object->$setter($newImage);
            }
        }
        return $object;
    }



    public function getParentFolder($key){
        $uploadFolder = Config::getWebsiteConfig()->get($key);
        if(!$uploadFolder){
            $uploadFolder = \Pimcore\Model\Asset::getByPath("/");
        }
        return $uploadFolder;
    }
}
