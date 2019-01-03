<?php 

/** 
* Generated at: 2018-12-24T20:20:42+01:00


Fields Summary: 
 - configurationKey [input]
 - auth_orderNumber [input]
 - auth_language [input]
 - auth_amount [input]
 - auth_currency [input]
 - auth_paymentType [input]
 - paymentFinished [datetime]
 - sourceOrder [href]
 - auth_anonymousPan [input]
 - auth_maskedPan [input]
 - auth_expiry [input]
 - auth_bankAccountOwner [input]
 - auth_bankAccountIBAN [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderQpay extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "PaymentProviderQpay";
protected $configurationKey;
protected $auth_orderNumber;
protected $auth_language;
protected $auth_amount;
protected $auth_currency;
protected $auth_paymentType;
protected $paymentFinished;
protected $sourceOrder;
protected $auth_anonymousPan;
protected $auth_maskedPan;
protected $auth_expiry;
protected $auth_bankAccountOwner;
protected $auth_bankAccountIBAN;


/**
* Get configurationKey - Configuration Key
* @return string
*/
public function getConfigurationKey () {
	$data = $this->configurationKey;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("configurationKey")->isEmpty($data)) {
		return $this->getValueFromParent("configurationKey");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set configurationKey - Configuration Key
* @param string $configurationKey
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setConfigurationKey ($configurationKey) {
	$fd = $this->getDefinition()->getFieldDefinition("configurationKey");
	$this->configurationKey = $configurationKey;
	return $this;
}

/**
* Get auth_orderNumber - OrderNumber
* @return string
*/
public function getAuth_orderNumber () {
	$data = $this->auth_orderNumber;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_orderNumber")->isEmpty($data)) {
		return $this->getValueFromParent("auth_orderNumber");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_orderNumber - OrderNumber
* @param string $auth_orderNumber
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_orderNumber ($auth_orderNumber) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_orderNumber");
	$this->auth_orderNumber = $auth_orderNumber;
	return $this;
}

/**
* Get auth_language - Language
* @return string
*/
public function getAuth_language () {
	$data = $this->auth_language;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_language")->isEmpty($data)) {
		return $this->getValueFromParent("auth_language");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_language - Language
* @param string $auth_language
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_language ($auth_language) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_language");
	$this->auth_language = $auth_language;
	return $this;
}

/**
* Get auth_amount - Amount
* @return string
*/
public function getAuth_amount () {
	$data = $this->auth_amount;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_amount")->isEmpty($data)) {
		return $this->getValueFromParent("auth_amount");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_amount - Amount
* @param string $auth_amount
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_amount ($auth_amount) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_amount");
	$this->auth_amount = $auth_amount;
	return $this;
}

/**
* Get auth_currency - Currency
* @return string
*/
public function getAuth_currency () {
	$data = $this->auth_currency;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_currency")->isEmpty($data)) {
		return $this->getValueFromParent("auth_currency");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_currency - Currency
* @param string $auth_currency
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_currency ($auth_currency) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_currency");
	$this->auth_currency = $auth_currency;
	return $this;
}

/**
* Get auth_paymentType - Method
* @return string
*/
public function getAuth_paymentType () {
	$data = $this->auth_paymentType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentType")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentType");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_paymentType - Method
* @param string $auth_paymentType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_paymentType ($auth_paymentType) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_paymentType");
	$this->auth_paymentType = $auth_paymentType;
	return $this;
}

/**
* Get paymentFinished - Date and Time
* @return \Carbon\Carbon
*/
public function getPaymentFinished () {
	$data = $this->paymentFinished;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("paymentFinished")->isEmpty($data)) {
		return $this->getValueFromParent("paymentFinished");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set paymentFinished - Date and Time
* @param \Carbon\Carbon $paymentFinished
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setPaymentFinished ($paymentFinished) {
	$fd = $this->getDefinition()->getFieldDefinition("paymentFinished");
	$this->paymentFinished = $paymentFinished;
	return $this;
}

/**
* Get sourceOrder - Source Order
* @return \Pimcore\Model\DataObject\OnlineShopOrder
*/
public function getSourceOrder () {
	$data = $this->getDefinition()->getFieldDefinition("sourceOrder")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("sourceOrder")->isEmpty($data)) {
		return $this->getValueFromParent("sourceOrder");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set sourceOrder - Source Order
* @param \Pimcore\Model\DataObject\OnlineShopOrder $sourceOrder
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setSourceOrder ($sourceOrder) {
	$fd = $this->getDefinition()->getFieldDefinition("sourceOrder");
	$currentData = $this->getSourceOrder();
	$isEqual = $fd->isEqual($currentData, $sourceOrder);
	if (!$isEqual) {
		$this->markFieldDirty("sourceOrder", true);
	}
	$this->sourceOrder = $fd->preSetData($this, $sourceOrder);
	return $this;
}

/**
* Get auth_anonymousPan - Anonymous Pan
* @return string
*/
public function getAuth_anonymousPan () {
	$data = $this->auth_anonymousPan;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_anonymousPan")->isEmpty($data)) {
		return $this->getValueFromParent("auth_anonymousPan");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_anonymousPan - Anonymous Pan
* @param string $auth_anonymousPan
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_anonymousPan ($auth_anonymousPan) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_anonymousPan");
	$this->auth_anonymousPan = $auth_anonymousPan;
	return $this;
}

/**
* Get auth_maskedPan - Masked Pan
* @return string
*/
public function getAuth_maskedPan () {
	$data = $this->auth_maskedPan;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_maskedPan")->isEmpty($data)) {
		return $this->getValueFromParent("auth_maskedPan");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_maskedPan - Masked Pan
* @param string $auth_maskedPan
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_maskedPan ($auth_maskedPan) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_maskedPan");
	$this->auth_maskedPan = $auth_maskedPan;
	return $this;
}

/**
* Get auth_expiry - Expiry
* @return string
*/
public function getAuth_expiry () {
	$data = $this->auth_expiry;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_expiry")->isEmpty($data)) {
		return $this->getValueFromParent("auth_expiry");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_expiry - Expiry
* @param string $auth_expiry
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_expiry ($auth_expiry) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_expiry");
	$this->auth_expiry = $auth_expiry;
	return $this;
}

/**
* Get auth_bankAccountOwner - Bank Account Owner
* @return string
*/
public function getAuth_bankAccountOwner () {
	$data = $this->auth_bankAccountOwner;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_bankAccountOwner")->isEmpty($data)) {
		return $this->getValueFromParent("auth_bankAccountOwner");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_bankAccountOwner - Bank Account Owner
* @param string $auth_bankAccountOwner
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_bankAccountOwner ($auth_bankAccountOwner) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_bankAccountOwner");
	$this->auth_bankAccountOwner = $auth_bankAccountOwner;
	return $this;
}

/**
* Get auth_bankAccountIBAN - IBAN
* @return string
*/
public function getAuth_bankAccountIBAN () {
	$data = $this->auth_bankAccountIBAN;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_bankAccountIBAN")->isEmpty($data)) {
		return $this->getValueFromParent("auth_bankAccountIBAN");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_bankAccountIBAN - IBAN
* @param string $auth_bankAccountIBAN
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_bankAccountIBAN ($auth_bankAccountIBAN) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_bankAccountIBAN");
	$this->auth_bankAccountIBAN = $auth_bankAccountIBAN;
	return $this;
}

}

