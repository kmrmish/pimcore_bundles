<?php 

/** 
* Generated at: 2018-12-24T20:20:41+01:00


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesBenefitsBackpacks extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "featuresBenefitsBackpacks";
protected $specs;


/**
* Get specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesBenefitsBackpacks
*/
public function setSpecs ($specs) {
	$fd = $this->getDefinition()->getFieldDefinition("specs");
	$this->specs = $specs;
	return $this;
}

}

