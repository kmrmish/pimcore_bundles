<?php 

/** 
* Generated at: 2018-12-24T20:20:43+01:00


Fields Summary: 
 - image [image]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class ProductImages extends DataObject\Fieldcollection\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {

use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "productImages";
protected $image;


/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$data = $this->image;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\DataObject\ProductImages
*/
public function setImage ($image) {
	$fd = $this->getDefinition()->getFieldDefinition("image");
	$this->image = $image;
	return $this;
}

}

