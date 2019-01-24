<?php 

/** 
* Generated at: 2019-01-24T07:52:56+01:00
* IP: 127.0.0.1


Fields Summary: 
 - Large [input]
 - Medium [input]
 - Small [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class CdnPath extends DataObject\Fieldcollection\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {

use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "CdnPath";
protected $Large;
protected $Medium;
protected $Small;


/**
* Get Large - Large
* @return string
*/
public function getLarge () {
	$data = $this->Large;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set Large - Large
* @param string $Large
* @return \Pimcore\Model\DataObject\CdnPath
*/
public function setLarge ($Large) {
	$fd = $this->getDefinition()->getFieldDefinition("Large");
	$this->Large = $Large;
	return $this;
}

/**
* Get Medium - Medium
* @return string
*/
public function getMedium () {
	$data = $this->Medium;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set Medium - Medium
* @param string $Medium
* @return \Pimcore\Model\DataObject\CdnPath
*/
public function setMedium ($Medium) {
	$fd = $this->getDefinition()->getFieldDefinition("Medium");
	$this->Medium = $Medium;
	return $this;
}

/**
* Get Small - Small
* @return string
*/
public function getSmall () {
	$data = $this->Small;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set Small - Small
* @param string $Small
* @return \Pimcore\Model\DataObject\CdnPath
*/
public function setSmall ($Small) {
	$fd = $this->getDefinition()->getFieldDefinition("Small");
	$this->Small = $Small;
	return $this;
}

}

