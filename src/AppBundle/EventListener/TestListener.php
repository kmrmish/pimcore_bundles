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
            		if($mainImage->getThumbnail("MainImage1")->getAsset()){
            			$obj = $mainImage->getThumbnail("MainImage1")->getAsset();
            			$obj->save();
            			$object->setMainImage($obj);	
            		}

					if($mainImage->getThumbnail("MainImage2")->getAsset()){
						$obj = $mainImage->getThumbnail("MainImage2")->getAsset();
            			$obj->save();
            			$object->setMainImage2($obj);	
            		}

            		if($mainImage->getThumbnail("MainImage3")->getAsset()){
            			$obj = $mainImage->getThumbnail("MainImage3")->getAsset();
            			$obj->save();
            			$object->setMainImage3($obj);	
            		}            		
            		
            	}

            	$imageGallary = $object->getImageGallary();
            	if($imageGallary){
            		$object->setImageGallary2($imageGallary);
            	}
            }
            
        }

    }
}
