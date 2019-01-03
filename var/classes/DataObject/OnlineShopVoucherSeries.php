<?php 

/** 
* Generated at: 2018-12-24T20:20:26+01:00
* Inheritance: no
* Variants: no


Fields Summary: 
- name [input]
- tokenSettings [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherSeries\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherSeries\Listing getByTokenSettings ($value, $limit = 0) 
*/

class OnlineShopVoucherSeries extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractVoucherSeries implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "33";
protected $o_className = "OnlineShopVoucherSeries";
protected $name;
protected $tokenSettings;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public function setName ($name) {
	$fd = $this->getClass()->getFieldDefinition("name");
	$this->name = $name;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getTokenSettings () {
	$preValue = $this->preGetValue("tokenSettings"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("tokenSettings")->preGetData($this);
	 return $data;
}

/**
* Set tokenSettings - Token Settings
* @param \Pimcore\Model\DataObject\Fieldcollection $tokenSettings
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public function setTokenSettings ($tokenSettings) {
	$fd = $this->getClass()->getFieldDefinition("tokenSettings");
	$this->tokenSettings = $fd->preSetData($this, $tokenSettings);
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

