<?php 

/** 
* Generated at: 2018-12-24T20:20:43+01:00


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - scriptPath [input]
 - availableRelations [multihref]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterRelation extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {

use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "FilterRelation";
protected $label;
protected $field;
protected $scriptPath;
protected $availableRelations;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterRelation
*/
public function setLabel ($label) {
	$fd = $this->getDefinition()->getFieldDefinition("label");
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection
*/
public function getField () {
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field
* @return \Pimcore\Model\DataObject\FilterRelation
*/
public function setField ($field) {
	$fd = $this->getDefinition()->getFieldDefinition("field");
	$this->field = $field;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterRelation
*/
public function setScriptPath ($scriptPath) {
	$fd = $this->getDefinition()->getFieldDefinition("scriptPath");
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableRelations - Available Relations
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getAvailableRelations () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("availableRelations");
	$data = $fd->preGetData($container);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set availableRelations - Available Relations
* @param \Pimcore\Model\DataObject\AbstractObject[] $availableRelations
* @return \Pimcore\Model\DataObject\FilterRelation
*/
public function setAvailableRelations ($availableRelations) {
	$fd = $this->getDefinition()->getFieldDefinition("availableRelations");
	$currentData = $this->getAvailableRelations();
	$isEqual = $fd->isEqual($currentData, $availableRelations);
	if (!$isEqual) {
		$this->markFieldDirty("availableRelations", true);
	}
	$this->availableRelations = $fd->preSetData($this, $availableRelations);
	return $this;
}

}

