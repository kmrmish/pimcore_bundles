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

class TestListener
{
    /**
     * @param DataObjectEvent $event
     */
    public function onObjectPreUpdate(DataObjectEvent $event)
    {
        if ($event instanceof DataObjectEvent) {
            $object = $event->getObject(); 
            if($object instanceof DefaultProduct){
            	$mainImage = $object->getMainImage();
                $container = \Pimcore::getContainer();
                $mainImageUploadConfig = $container->getParameter('MainImageFields');
                $imageGallaryUploadConfig = $container->getParameter('ImageGallaryFields');
                $productMainImagesFolder = Config::getWebsiteConfig()->get('productMainImageUploads');
                $productImageGallaryUploads = Config::getWebsiteConfig()->get('productImageGallaryUploads');
            	if($mainImage){
                    foreach ($mainImageUploadConfig as $field => $thumbnailArray){
                        $thumbnail = $thumbnailArray['thumbnail'];
                        $setter = 'set'.$field;
                        if($mainImage->getThumbnail($thumbnail)){
                            $newImage = $this->createThumbnail($mainImage,$thumbnail, $productMainImagesFolder, $object);
                            if($newImage){
                                $object->$setter($newImage);
                            }
                        }
                    }
            	}

            	$imageGallary = $object->getImageGallary();
           		if(count($imageGallary->getItems()) && end($imageGallary->getItems())){
           			$currentImage = end($imageGallary->getItems())->getImage();
           			if($currentImage){
	           			foreach ($imageGallaryUploadConfig as $field => $thumbnailArray){
	           				$thumbnail = $thumbnailArray['thumbnail'];
	                       $setter = 'set'.$field;
	                       $getter = 'get'.$field;
	                       if($currentImage->getThumbnail($thumbnail)){
	                           $newImage = $this->createThumbnail($currentImage,$thumbnail, $productImageGallaryUploads, $object);
	                           if($newImage){
	                                $imageCollection = $object->$getter();
	                                $imageCollectionArray = $imageCollection->getItems();
	                                if($field == 'ImageGallary'){ 
	                                	array_pop($imageCollectionArray);
	                                }

	                                $advancedImage = new \Pimcore\Model\DataObject\Data\Hotspotimage();
   									$advancedImage->setImage($newImage);
	                                $imageCollectionArray[] = $advancedImage;
	                                $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery($imageCollectionArray));
	                           }
	                       }
	                    }
           			}
                   
           		}
            }
            
        }

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
                /* uploading the image */
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
}
