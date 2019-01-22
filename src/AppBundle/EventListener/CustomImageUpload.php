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
                $container = \Pimcore::getContainer();

                /* from custom_image_upload.yml: mapping of main images fields and their respective thumbnail names  */
                $mainImageUploadConfig = $container->getParameter('MainImageFields');

                /* from custom_image_upload.yml: mapping of gallary fields and their respective thumbnail names  */
                $imageGallaryUploadConfig = $container->getParameter('ImageGallaryFields');

                /* asset folder for saving all the main images after creating them */
                $productMainImagesFolder = Config::getWebsiteConfig()->get('productMainImageUploads');
                if(!$productImageGallaryUploads){
                	$productImageGallaryUploads = \Pimcore\Model\Asset::getByPath("/");
                }

                /* asset folder for saving all the gallary images after creating them */
                $productImageGallaryUploads = Config::getWebsiteConfig()->get('productImageGallaryUploads');
                if(!$productImageGallaryUploads){
                	$productImageGallaryUploads = \Pimcore\Model\Asset::getByPath("/");
                }

                /* currently uploaded main image */
                $mainImage = $object->getMain();
            	if($mainImage){
            		/* tracing all the main image fields */
                    foreach ($mainImageUploadConfig as $field => $thumbnailArray){
                        $thumbnail = $thumbnailArray['thumbnail'];
                        $setter = 'set'.$field;
                        $getter = 'get'.$field;
                        $currentMainImage = $object->$getter();
                        if($currentMainImage){
                            $currentMainImage->delete();
                        }

                        if($mainImage->getThumbnail($thumbnail)){
                
                        	/* creating new image as per corresponding thumbnail configuration */
                            $newImage = $this->createThumbnail($mainImage,$thumbnail, $productMainImagesFolder, $object);
                            if($newImage){
                            	/* saving the image in product's respective main image field */
                                $object->$setter($newImage);
                            }
                        }
                    }
            	} else {
                    foreach ($mainImageUploadConfig as $field => $thumbnailArray){
                        $setter = 'set'.$field;
                        $object->$setter('');
                    }
                    
                }

				/* current set of gallary images after droping image in gallary field */
            	$imageGallary = $object->getGallery();
           		if(count($imageGallary->getItems()) && end($imageGallary->getItems())->getImage()){
                    //p_r(end($imageGallary->getItems()));die;
           			/* currently uploaded gallary image */
           			$currentImage = end($imageGallary->getItems())->getImage();
           			if($currentImage){
           				/* tracing all the image gallary fields */
	           			foreach ($imageGallaryUploadConfig as $field => $thumbnailArray){
	           			     $thumbnail = $thumbnailArray['thumbnail'];
	                       $setter = 'set'.$field;
	                       $getter = 'get'.$field;
	                       if($currentImage->getThumbnail($thumbnail)){
	                           $imageCollectionArray = array();
                               foreach ($imageGallary->getItems() as $key => $galleryItem) {
                                   $newImage = $this->createThumbnail($galleryItem->getImage(),$thumbnail, $productImageGallaryUploads, $object);
                                   $advancedImage = new \Pimcore\Model\DataObject\Data\Hotspotimage();
                                        $advancedImage->setImage($newImage);
                                    $imageCollectionArray[] = $advancedImage;
                               }
                               $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery($imageCollectionArray));
	                       }
	                    }
           			}
                   
           		} else {
                    foreach ($imageGallaryUploadConfig as $field => $thumbnailArray){
                        $setter = 'set'.$field;
                         $object->$setter(new \Pimcore\Model\DataObject\Data\ImageGallery(array()));
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
