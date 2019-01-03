<?php 

/** 
* Generated at: 2018-12-24T20:20:42+01:00


Fields Summary: 
 - weight [numeric]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class Weight extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "weight";
protected $weight;


/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Weight
*/
public function setWeight ($weight) {
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $weight;
	return $this;
}

}

