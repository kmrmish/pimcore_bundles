<?php 

/** 
* Generated at: 2018-12-27T10:10:46+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (19)
* IP: 127.0.0.1


Fields Summary: 
- ImageHeight [input]
- ImageWidth [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\ImageDimensions\Listing getByImageHeight ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\ImageDimensions\Listing getByImageWidth ($value, $limit = 0) 
*/

class ImageDimensions extends Concrete implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "42";
protected $o_className = "ImageDimensions";
protected $ImageHeight;
protected $ImageWidth;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ImageDimensions
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ImageHeight - Image Height
* @return string
*/
public function getImageHeight () {
	$preValue = $this->preGetValue("ImageHeight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ImageHeight;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set ImageHeight - Image Height
* @param string $ImageHeight
* @return \Pimcore\Model\DataObject\ImageDimensions
*/
public function setImageHeight ($ImageHeight) {
	$fd = $this->getClass()->getFieldDefinition("ImageHeight");
	$this->ImageHeight = $ImageHeight;
	return $this;
}

/**
* Get ImageWidth - Image Width
* @return string
*/
public function getImageWidth () {
	$preValue = $this->preGetValue("ImageWidth"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ImageWidth;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set ImageWidth - Image Width
* @param string $ImageWidth
* @return \Pimcore\Model\DataObject\ImageDimensions
*/
public function setImageWidth ($ImageWidth) {
	$fd = $this->getClass()->getFieldDefinition("ImageWidth");
	$this->ImageWidth = $ImageWidth;
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

