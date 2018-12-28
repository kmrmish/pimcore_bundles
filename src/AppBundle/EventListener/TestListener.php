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
            	if($mainImage){ 
            		if($mainImage->getThumbnail("MainImage1")){
            			$object->setMainImage($this->createThumbnail($mainImage,'MainImage1'));	
            		}

					if($mainImage->getThumbnail("MainImage2")){
						$object->setMainImage2($this->createThumbnail($mainImage,'MainImage2'));
            		}

            		if($mainImage->getThumbnail("MainImage3")){
            			$object->setMainImage3($this->createThumbnail($mainImage,'MainImage3'));
            		}
            	}

            	$imageGallary = $object->getImageGallary();
            	if($imageGallary){
            		$object->setImageGallary2($imageGallary);
            	}
            }
            
        }

    }


    public function createThumbnail($image, $thumbnailName)
    {
    	$parent = $image->getParent();
    	
    	/* check if current thumbnail image exists or not */
    	if(strpos($image->getfilename(), $thumbnailName) !== false){
    		$thumbName = $image->getfilename();
    	} else {
    		$thumbName = $thumbnailName.'-'.$image->getfilename();	
    	}
    	
    	/* if image already exits, delete the image first and then upload */
		$thumbPath = $image->getThumbnail($thumbnailName)->getFileSystemPath();
		$thumbTreePath = $parent->getPath().$thumbName;
		$thumbObj = \Pimcore\Model\Asset::getByPath($thumbTreePath);
		
		/* uploading the image */
		$newAsset = new \Pimcore\Model\Asset();
		$newAsset->setFilename($thumbName);
		$newAsset->setData(file_get_contents($thumbPath));
		$newAsset->setParent($parent);
		$thumbObj->delete();
		$newAsset->save();
		return $newAsset;
    }
}
