<?php 

/** 
* Generated at: 2018-12-24T20:20:41+01:00


Fields Summary: 
 - data_orderNumber [input]
 - data_language [input]
 - data_amount [input]
 - data_currency [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentAuthorizedDataQpay extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "paymentAuthorizedDataQpay";
protected $data_orderNumber;
protected $data_language;
protected $data_amount;
protected $data_currency;


/**
* Get data_orderNumber - OrderNumber
* @return string
*/
public function getData_orderNumber () {
	$data = $this->data_orderNumber;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_orderNumber")->isEmpty($data)) {
		return $this->getValueFromParent("data_orderNumber");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set data_orderNumber - OrderNumber
* @param string $data_orderNumber
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentAuthorizedDataQpay
*/
public function setData_orderNumber ($data_orderNumber) {
	$fd = $this->getDefinition()->getFieldDefinition("data_orderNumber");
	$this->data_orderNumber = $data_orderNumber;
	return $this;
}

/**
* Get data_language - Language
* @return string
*/
public function getData_language () {
	$data = $this->data_language;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_language")->isEmpty($data)) {
		return $this->getValueFromParent("data_language");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set data_language - Language
* @param string $data_language
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentAuthorizedDataQpay
*/
public function setData_language ($data_language) {
	$fd = $this->getDefinition()->getFieldDefinition("data_language");
	$this->data_language = $data_language;
	return $this;
}

/**
* Get data_amount - Amount
* @return string
*/
public function getData_amount () {
	$data = $this->data_amount;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_amount")->isEmpty($data)) {
		return $this->getValueFromParent("data_amount");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set data_amount - Amount
* @param string $data_amount
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentAuthorizedDataQpay
*/
public function setData_amount ($data_amount) {
	$fd = $this->getDefinition()->getFieldDefinition("data_amount");
	$this->data_amount = $data_amount;
	return $this;
}

/**
* Get data_currency - Currency
* @return string
*/
public function getData_currency () {
	$data = $this->data_currency;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_currency")->isEmpty($data)) {
		return $this->getValueFromParent("data_currency");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set data_currency - Currency
* @param string $data_currency
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentAuthorizedDataQpay
*/
public function setData_currency ($data_currency) {
	$fd = $this->getDefinition()->getFieldDefinition("data_currency");
	$this->data_currency = $data_currency;
	return $this;
}

}

