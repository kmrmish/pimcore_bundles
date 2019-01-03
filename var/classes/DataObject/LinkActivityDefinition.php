<?php 

/** 
* Generated at: 2018-12-24T20:20:24+01:00
* Inheritance: yes
* Variants: no


Fields Summary: 
- code [input]
- attributeType [input]
- label [input]
- link [link]
- active [select]
- utm_source [input]
- utm_medium [input]
- utm_campaign [input]
- utm_term [input]
- utm_content [input]
- attributes [block]
-- attribute [input]
-- attributeValue [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByCode ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByAttributeType ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByLabel ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByLink ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByActive ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_source ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_medium ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_campaign ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_term ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_content ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByAttributes ($value, $limit = 0) 
*/

class LinkActivityDefinition extends Concrete implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "40";
protected $o_className = "LinkActivityDefinition";
protected $code;
protected $attributeType;
protected $label;
protected $link;
protected $active;
protected $utm_source;
protected $utm_medium;
protected $utm_campaign;
protected $utm_term;
protected $utm_content;
protected $attributes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get code - code (cmfa)
* @return string
*/
public function getCode () {
	$preValue = $this->preGetValue("code"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->code;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("code")->isEmpty($data)) {
		return $this->getValueFromParent("code");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set code - code (cmfa)
* @param string $code
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setCode ($code) {
	$fd = $this->getClass()->getFieldDefinition("code");
	$this->code = $code;
	return $this;
}

/**
* Get attributeType - type
* @return string
*/
public function getAttributeType () {
	$preValue = $this->preGetValue("attributeType"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->attributeType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributeType")->isEmpty($data)) {
		return $this->getValueFromParent("attributeType");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set attributeType - type
* @param string $attributeType
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setAttributeType ($attributeType) {
	$fd = $this->getClass()->getFieldDefinition("attributeType");
	$this->attributeType = $attributeType;
	return $this;
}

/**
* Get label - label
* @return string
*/
public function getLabel () {
	$preValue = $this->preGetValue("label"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->label;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("label")->isEmpty($data)) {
		return $this->getValueFromParent("label");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set label - label
* @param string $label
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setLabel ($label) {
	$fd = $this->getClass()->getFieldDefinition("label");
	$this->label = $label;
	return $this;
}

/**
* Get link - Landing page link
* @return \Pimcore\Model\DataObject\Data\Link
*/
public function getLink () {
	$preValue = $this->preGetValue("link"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->link;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("link")->isEmpty($data)) {
		return $this->getValueFromParent("link");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set link - Landing page link
* @param \Pimcore\Model\DataObject\Data\Link $link
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setLink ($link) {
	$fd = $this->getClass()->getFieldDefinition("link");
	$this->link = $link;
	return $this;
}

/**
* Get active - active
* @return string
*/
public function getActive () {
	$preValue = $this->preGetValue("active"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->active;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("active")->isEmpty($data)) {
		return $this->getValueFromParent("active");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set active - active
* @param string $active
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setActive ($active) {
	$fd = $this->getClass()->getFieldDefinition("active");
	$this->active = $active;
	return $this;
}

/**
* Get utm_source - Campaign Source (utm_source)
* @return string
*/
public function getUtm_source () {
	$preValue = $this->preGetValue("utm_source"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_source;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_source")->isEmpty($data)) {
		return $this->getValueFromParent("utm_source");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set utm_source - Campaign Source (utm_source)
* @param string $utm_source
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_source ($utm_source) {
	$fd = $this->getClass()->getFieldDefinition("utm_source");
	$this->utm_source = $utm_source;
	return $this;
}

/**
* Get utm_medium - Campaign Medium (utm_medium)
* @return string
*/
public function getUtm_medium () {
	$preValue = $this->preGetValue("utm_medium"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_medium;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_medium")->isEmpty($data)) {
		return $this->getValueFromParent("utm_medium");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set utm_medium - Campaign Medium (utm_medium)
* @param string $utm_medium
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_medium ($utm_medium) {
	$fd = $this->getClass()->getFieldDefinition("utm_medium");
	$this->utm_medium = $utm_medium;
	return $this;
}

/**
* Get utm_campaign - Campaign Name (utm_campaign)
* @return string
*/
public function getUtm_campaign () {
	$preValue = $this->preGetValue("utm_campaign"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_campaign;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_campaign")->isEmpty($data)) {
		return $this->getValueFromParent("utm_campaign");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set utm_campaign - Campaign Name (utm_campaign)
* @param string $utm_campaign
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_campaign ($utm_campaign) {
	$fd = $this->getClass()->getFieldDefinition("utm_campaign");
	$this->utm_campaign = $utm_campaign;
	return $this;
}

/**
* Get utm_term - Campaign Term (utm_term)
* @return string
*/
public function getUtm_term () {
	$preValue = $this->preGetValue("utm_term"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_term;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_term")->isEmpty($data)) {
		return $this->getValueFromParent("utm_term");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set utm_term - Campaign Term (utm_term)
* @param string $utm_term
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_term ($utm_term) {
	$fd = $this->getClass()->getFieldDefinition("utm_term");
	$this->utm_term = $utm_term;
	return $this;
}

/**
* Get utm_content - Campaign Content (utm_content)
* @return string
*/
public function getUtm_content () {
	$preValue = $this->preGetValue("utm_content"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_content;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_content")->isEmpty($data)) {
		return $this->getValueFromParent("utm_content");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set utm_content - Campaign Content (utm_content)
* @param string $utm_content
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_content ($utm_content) {
	$fd = $this->getClass()->getFieldDefinition("utm_content");
	$this->utm_content = $utm_content;
	return $this;
}

/**
* Get attributes - Additional attributes
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getAttributes () {
	$preValue = $this->preGetValue("attributes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("attributes")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributes")->isEmpty($data)) {
		return $this->getValueFromParent("attributes");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set attributes - Additional attributes
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $attributes
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setAttributes ($attributes) {
	$fd = $this->getClass()->getFieldDefinition("attributes");
	$this->attributes = $fd->preSetData($this, $attributes);
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

