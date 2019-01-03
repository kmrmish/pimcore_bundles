<?php 

/** 
* Generated at: 2018-12-24T20:20:25+01:00
* Inheritance: no
* Variants: no


Fields Summary: 
- product [href]
- productNumber [input]
- productName [input]
- amount [numeric]
- originalTotalPrice [numeric]
- DiscountType [select]
- discount [numeric]
- finalTotalPrice [numeric]
- subItems [objects]
- comment [textarea]
- cartItemKey [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByProduct ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByProductNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByProductName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByAmount ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByOriginalTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByDiscountType ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByDiscount ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByFinalTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getBySubItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByComment ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OfferToolOfferItem\Listing getByCartItemKey ($value, $limit = 0) 
*/

class OfferToolOfferItem extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOfferItem implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "31";
protected $o_className = "OfferToolOfferItem";
protected $product;
protected $productNumber;
protected $productName;
protected $amount;
protected $originalTotalPrice;
protected $DiscountType;
protected $discount;
protected $finalTotalPrice;
protected $subItems;
protected $comment;
protected $cartItemKey;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get product - Produkt
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
* Set product - Produkt
* @param \Pimcore\Model\DataObject\AbstractObject $product
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
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
* Get productNumber - Produktnummer
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
* Set productNumber - Produktnummer
* @param string $productNumber
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setProductNumber ($productNumber) {
	$fd = $this->getClass()->getFieldDefinition("productNumber");
	$this->productNumber = $productNumber;
	return $this;
}

/**
* Get productName - Produktname
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
* Set productName - Produktname
* @param string $productName
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
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
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setAmount ($amount) {
	$fd = $this->getClass()->getFieldDefinition("amount");
	$this->amount = $amount;
	return $this;
}

/**
* Get originalTotalPrice - Original Total Price
* @return string
*/
public function getOriginalTotalPrice () {
	$preValue = $this->preGetValue("originalTotalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->originalTotalPrice;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set originalTotalPrice - Original Total Price
* @param string $originalTotalPrice
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setOriginalTotalPrice ($originalTotalPrice) {
	$fd = $this->getClass()->getFieldDefinition("originalTotalPrice");
	$this->originalTotalPrice = $originalTotalPrice;
	return $this;
}

/**
* Get DiscountType - Discount Type
* @return string
*/
public function getDiscountType () {
	$preValue = $this->preGetValue("DiscountType"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->DiscountType;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set DiscountType - Discount Type
* @param string $DiscountType
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setDiscountType ($DiscountType) {
	$fd = $this->getClass()->getFieldDefinition("DiscountType");
	$this->DiscountType = $DiscountType;
	return $this;
}

/**
* Get discount - Discount
* @return string
*/
public function getDiscount () {
	$preValue = $this->preGetValue("discount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discount;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set discount - Discount
* @param string $discount
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setDiscount ($discount) {
	$fd = $this->getClass()->getFieldDefinition("discount");
	$this->discount = $discount;
	return $this;
}

/**
* Get finalTotalPrice - Preis
* @return string
*/
public function getFinalTotalPrice () {
	$preValue = $this->preGetValue("finalTotalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->finalTotalPrice;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set finalTotalPrice - Preis
* @param string $finalTotalPrice
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setFinalTotalPrice ($finalTotalPrice) {
	$fd = $this->getClass()->getFieldDefinition("finalTotalPrice");
	$this->finalTotalPrice = $finalTotalPrice;
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
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
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
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setComment ($comment) {
	$fd = $this->getClass()->getFieldDefinition("comment");
	$this->comment = $comment;
	return $this;
}

/**
* Get cartItemKey - CartItemKey
* @return string
*/
public function getCartItemKey () {
	$preValue = $this->preGetValue("cartItemKey"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->cartItemKey;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set cartItemKey - CartItemKey
* @param string $cartItemKey
* @return \Pimcore\Model\DataObject\OfferToolOfferItem
*/
public function setCartItemKey ($cartItemKey) {
	$fd = $this->getClass()->getFieldDefinition("cartItemKey");
	$this->cartItemKey = $cartItemKey;
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
  0 => 'subItems',
);

}

