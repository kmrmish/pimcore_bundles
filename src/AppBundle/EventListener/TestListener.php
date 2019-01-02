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
                            $newImage = $this->createThumbnail($mainImage,$thumbnail, $productMainImagesFolder);
                            if($newImage){
                                $object->$setter($newImage);
                            }

                        }
                    }
            	}

            	$imageGallary = $object->getImageGallary();
//            	if($imageGallary){
//                    foreach ($imageGallaryUploadConfig as $field => $thumbnail){
//                        $setter = 'set'.$field;
//                        if($imageGallary->getThumbnail($thumbnail)){
//                            $newImage = $this->createThumbnail($imageGallary,$thumbnail, $productImageGallaryUploads);
//                            if($newImage){
//                                $object->$setter($newImage);
//                            }
//                        }
//                    }
//            	}
            }
            
        }

    }


    public function createThumbnail($image, $thumbnailName, $parent)
    {
        $currentImageParent = $image->getParent();
        if($currentImageParent != $parent){
            /* check if current thumbnail image exists or not */
            $thumbName = $thumbnailName.'-'.$image->getfilename();

            /* if image already exits, delete the image first and then upload */
            $thumbPath = $image->getThumbnail($thumbnailName)->getFileSystemPath();
            $thumbTreePath = $parent->getPath().$thumbName;
            $thumbObj = \Pimcore\Model\Asset::getByPath($thumbTreePath);
            if(!$thumbObj){
                /* uploading the image */
                $newAsset = new \Pimcore\Model\Asset();
                $newAsset->setFilename($thumbName);
                $newAsset->setData(file_get_contents($thumbPath));
                $newAsset->setParent($parent);
                $newAsset->save();
            }
            return $newAsset;
        }
        return false;

    }
}
