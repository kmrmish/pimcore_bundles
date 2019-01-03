<?php 

/** 
* Generated at: 2018-12-24T20:20:25+01:00
* Inheritance: no
* Variants: no


Fields Summary: 
- orderState [select]
- product [href]
- productNumber [input]
- productName [input]
- amount [numeric]
- totalNetPrice [numeric]
- totalPrice [numeric]
- taxInfo [table]
- pricingRules [fieldcollections]
- comment [textarea]
- subItems [objects]
- customized [objectbricks]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByOrderState ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProduct ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProductNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProductName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByAmount ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTotalNetPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTaxInfo ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByPricingRules ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByComment ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getBySubItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByCustomized ($value, $limit = 0) 
*/

class OnlineShopOrderItem extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrderItem implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "8";
protected $o_className = "OnlineShopOrderItem";
protected $orderState;
protected $product;
protected $productNumber;
protected $productName;
protected $amount;
protected $totalNetPrice;
protected $totalPrice;
protected $taxInfo;
protected $pricingRules;
protected $comment;
protected $subItems;
protected $customized;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get orderState - Order Item State
* @return string
*/
public function getOrderState () {
	$preValue = $this->preGetValue("orderState"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderState;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set orderState - Order Item State
* @param string $orderState
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setOrderState ($orderState) {
	$fd = $this->getClass()->getFieldDefinition("orderState");
	$this->orderState = $orderState;
	return $this;
}

/**
* Get product - Product
* @return \Pimcore\Model\DataObject\AbstractObject
*/
public function getProduct () {
	$preValue = $this->preGetValue("product"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("product")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set product - Product
* @param \Pimcore\Model\DataObject\AbstractObject $product
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProduct ($product) {
	$fd = $this->getClass()->getFieldDefinition("product");
	$currentData = $this->getProduct();
	$isEqual = $fd->isEqual($currentData, $product);
	if (!$isEqual) {
		$this->markFieldDirty("product", true);
	}
	$this->product = $fd->preSetData($this, $product);
	return $this;
}

/**
* Get productNumber - Product Number
* @return string
*/
public function getProductNumber () {
	$preValue = $this->preGetValue("productNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->productNumber;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set productNumber - Product Number
* @param string $productNumber
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProductNumber ($productNumber) {
	$fd = $this->getClass()->getFieldDefinition("productNumber");
	$this->productNumber = $productNumber;
	return $this;
}

/**
* Get productName - Product Name
* @return string
*/
public function getProductName () {
	$preValue = $this->preGetValue("productName"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->productName;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set productName - Product Name
* @param string $productName
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProductName ($productName) {
	$fd = $this->getClass()->getFieldDefinition("productName");
	$this->productName = $productName;
	return $this;
}

/**
* Get amount - Amount
* @return float
*/
public function getAmount () {
	$preValue = $this->preGetValue("amount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->amount;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set amount - Amount
* @param float $amount
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setAmount ($amount) {
	$fd = $this->getClass()->getFieldDefinition("amount");
	$this->amount = $amount;
	return $this;
}

/**
* Get totalNetPrice - NetPrice
* @return string
*/
public function getTotalNetPrice () {
	$preValue = $this->preGetValue("totalNetPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalNetPrice;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set totalNetPrice - NetPrice
* @param string $totalNetPrice
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTotalNetPrice ($totalNetPrice) {
	$fd = $this->getClass()->getFieldDefinition("totalNetPrice");
	$this->totalNetPrice = $totalNetPrice;
	return $this;
}

/**
* Get totalPrice - Price
* @return string
*/
public function getTotalPrice () {
	$preValue = $this->preGetValue("totalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalPrice;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set totalPrice - Price
* @param string $totalPrice
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTotalPrice ($totalPrice) {
	$fd = $this->getClass()->getFieldDefinition("totalPrice");
	$this->totalPrice = $totalPrice;
	return $this;
}

/**
* Get taxInfo - Tax Information
* @return array
*/
public function getTaxInfo () {
	$preValue = $this->preGetValue("taxInfo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taxInfo;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set taxInfo - Tax Information
* @param array $taxInfo
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTaxInfo ($taxInfo) {
	$fd = $this->getClass()->getFieldDefinition("taxInfo");
	$this->taxInfo = $taxInfo;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getPricingRules () {
	$preValue = $this->preGetValue("pricingRules"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("pricingRules")->preGetData($this);
	 return $data;
}

/**
* Set pricingRules - Pricing Rules
* @param \Pimcore\Model\DataObject\Fieldcollection $pricingRules
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setPricingRules ($pricingRules) {
	$fd = $this->getClass()->getFieldDefinition("pricingRules");
	$this->pricingRules = $fd->preSetData($this, $pricingRules);
	return $this;
}

/**
* Get comment - Comment
* @return string
*/
public function getComment () {
	$preValue = $this->preGetValue("comment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->comment;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set comment - Comment
* @param string $comment
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setComment ($comment) {
	$fd = $this->getClass()->getFieldDefinition("comment");
	$this->comment = $comment;
	return $this;
}

/**
* Get subItems - Subitems
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem[]
*/
public function getSubItems () {
	$preValue = $this->preGetValue("subItems"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("subItems")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set subItems - Subitems
* @param \Pimcore\Model\DataObject\OnlineShopOrderItem[] $subItems
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setSubItems ($subItems) {
	$fd = $this->getClass()->getFieldDefinition("subItems");
	$currentData = $this->getSubItems();
	$isEqual = $fd->isEqual($currentData, $subItems);
	if (!$isEqual) {
		$this->markFieldDirty("subItems", true);
	}
	$this->subItems = $fd->preSetData($this, $subItems);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Objectbrick
*/
public function getCustomized () {
	$data = $this->customized;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\OnlineShopOrderItem\\Customized")) { 
			$data = new \Pimcore\Model\DataObject\OnlineShopOrderItem\Customized($this, "customized");
			$this->customized = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("customized"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set customized - Customized
* @param \Pimcore\Model\DataObject\Objectbrick $customized
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setCustomized ($customized) {
	$fd = $this->getClass()->getFieldDefinition("customized");
	$this->customized = $fd->preSetData($this, $customized);
	return $this;
}

protected static $_relationFields = array (
  'product' => 
  array (
    'type' => 'href',
  ),
  'subItems' => 
  array (
    'type' => 'objects',
  ),
);

protected $lazyLoadedFields = array (
  0 => 'pricingRules',
);

}

