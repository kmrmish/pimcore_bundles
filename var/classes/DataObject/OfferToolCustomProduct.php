<?php 

/** 
* Generated at: 2018-12-24T20:20:25+01:00
* Inheritance: no
* Variants: no


Fields Summary: 
- OSproductNumber [input]
- OSName [input]
- productGroup [select]
- price [numeric]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByOSproductNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByOSName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByProductGroup ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByPrice ($value, $limit = 0) 
*/

class OfferToolCustomProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOfferToolProduct implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "32";
protected $o_className = "OfferToolCustomProduct";
protected $OSproductNumber;
protected $OSName;
protected $productGroup;
protected $price;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get OSproductNumber - Product Number
* @return string
*/
public function getOSproductNumber () {
	$preValue = $this->preGetValue("OSproductNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->OSproductNumber;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set OSproductNumber - Product Number
* @param string $OSproductNumber
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSproductNumber ($OSproductNumber) {
	$fd = $this->getClass()->getFieldDefinition("OSproductNumber");
	$this->OSproductNumber = $OSproductNumber;
	return $this;
}

/**
* Get OSName - Product Name
* @return string
*/
public function getOSName () {
	$preValue = $this->preGetValue("OSName"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->OSName;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set OSName - Product Name
* @param string $OSName
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSName ($OSName) {
	$fd = $this->getClass()->getFieldDefinition("OSName");
	$this->OSName = $OSName;
	return $this;
}

/**
* Get productGroup - Product Group
* @return string
*/
public function getProductGroup () {
	$preValue = $this->preGetValue("productGroup"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->productGroup;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set productGroup - Product Group
* @param string $productGroup
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setProductGroup ($productGroup) {
	$fd = $this->getClass()->getFieldDefinition("productGroup");
	$this->productGroup = $productGroup;
	return $this;
}

/**
* Get price - Price
* @return string
*/
public function getPrice () {
	$preValue = $this->preGetValue("price"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set price - Price
* @param string $price
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setPrice ($price) {
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $price;
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

