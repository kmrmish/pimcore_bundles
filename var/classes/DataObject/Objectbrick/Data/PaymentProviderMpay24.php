<?php 

/** 
* Generated at: 2018-12-24T20:20:41+01:00


Fields Summary: 
 - configurationKey [input]
 - auth_OPERATION [input]
 - auth_TID [input]
 - auth_STATUS [input]
 - auth_PRICE [input]
 - auth_CURRENCY [input]
 - auth_P_TYPE [input]
 - auth_BRAND [input]
 - auth_MPAYTID [input]
 - auth_APPR_CODE [input]
 - auth_PROFILE_STATUS [input]
 - auth_FILTER_STATUS [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderMpay24 extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "PaymentProviderMpay24";
protected $configurationKey;
protected $auth_OPERATION;
protected $auth_TID;
protected $auth_STATUS;
protected $auth_PRICE;
protected $auth_CURRENCY;
protected $auth_P_TYPE;
protected $auth_BRAND;
protected $auth_MPAYTID;
protected $auth_APPR_CODE;
protected $auth_PROFILE_STATUS;
protected $auth_FILTER_STATUS;


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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setConfigurationKey ($configurationKey) {
	$fd = $this->getDefinition()->getFieldDefinition("configurationKey");
	$this->configurationKey = $configurationKey;
	return $this;
}

/**
* Get auth_OPERATION - OPERATION
* @return string
*/
public function getAuth_OPERATION () {
	$data = $this->auth_OPERATION;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_OPERATION")->isEmpty($data)) {
		return $this->getValueFromParent("auth_OPERATION");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_OPERATION - OPERATION
* @param string $auth_OPERATION
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_OPERATION ($auth_OPERATION) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_OPERATION");
	$this->auth_OPERATION = $auth_OPERATION;
	return $this;
}

/**
* Get auth_TID - TID
* @return string
*/
public function getAuth_TID () {
	$data = $this->auth_TID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_TID")->isEmpty($data)) {
		return $this->getValueFromParent("auth_TID");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_TID - TID
* @param string $auth_TID
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_TID ($auth_TID) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_TID");
	$this->auth_TID = $auth_TID;
	return $this;
}

/**
* Get auth_STATUS - STATUS
* @return string
*/
public function getAuth_STATUS () {
	$data = $this->auth_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_STATUS")->isEmpty($data)) {
		return $this->getValueFromParent("auth_STATUS");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_STATUS - STATUS
* @param string $auth_STATUS
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_STATUS ($auth_STATUS) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_STATUS");
	$this->auth_STATUS = $auth_STATUS;
	return $this;
}

/**
* Get auth_PRICE - PRICE
* @return string
*/
public function getAuth_PRICE () {
	$data = $this->auth_PRICE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PRICE")->isEmpty($data)) {
		return $this->getValueFromParent("auth_PRICE");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_PRICE - PRICE
* @param string $auth_PRICE
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_PRICE ($auth_PRICE) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_PRICE");
	$this->auth_PRICE = $auth_PRICE;
	return $this;
}

/**
* Get auth_CURRENCY - CURRENCY
* @return string
*/
public function getAuth_CURRENCY () {
	$data = $this->auth_CURRENCY;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_CURRENCY")->isEmpty($data)) {
		return $this->getValueFromParent("auth_CURRENCY");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_CURRENCY - CURRENCY
* @param string $auth_CURRENCY
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_CURRENCY ($auth_CURRENCY) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_CURRENCY");
	$this->auth_CURRENCY = $auth_CURRENCY;
	return $this;
}

/**
* Get auth_P_TYPE - P_TYPE
* @return string
*/
public function getAuth_P_TYPE () {
	$data = $this->auth_P_TYPE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_P_TYPE")->isEmpty($data)) {
		return $this->getValueFromParent("auth_P_TYPE");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_P_TYPE - P_TYPE
* @param string $auth_P_TYPE
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_P_TYPE ($auth_P_TYPE) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_P_TYPE");
	$this->auth_P_TYPE = $auth_P_TYPE;
	return $this;
}

/**
* Get auth_BRAND - BRAND
* @return string
*/
public function getAuth_BRAND () {
	$data = $this->auth_BRAND;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_BRAND")->isEmpty($data)) {
		return $this->getValueFromParent("auth_BRAND");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_BRAND - BRAND
* @param string $auth_BRAND
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_BRAND ($auth_BRAND) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_BRAND");
	$this->auth_BRAND = $auth_BRAND;
	return $this;
}

/**
* Get auth_MPAYTID - MPAYTID
* @return string
*/
public function getAuth_MPAYTID () {
	$data = $this->auth_MPAYTID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_MPAYTID")->isEmpty($data)) {
		return $this->getValueFromParent("auth_MPAYTID");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_MPAYTID - MPAYTID
* @param string $auth_MPAYTID
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_MPAYTID ($auth_MPAYTID) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_MPAYTID");
	$this->auth_MPAYTID = $auth_MPAYTID;
	return $this;
}

/**
* Get auth_APPR_CODE - APPR_CODE
* @return string
*/
public function getAuth_APPR_CODE () {
	$data = $this->auth_APPR_CODE;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_APPR_CODE")->isEmpty($data)) {
		return $this->getValueFromParent("auth_APPR_CODE");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_APPR_CODE - APPR_CODE
* @param string $auth_APPR_CODE
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_APPR_CODE ($auth_APPR_CODE) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_APPR_CODE");
	$this->auth_APPR_CODE = $auth_APPR_CODE;
	return $this;
}

/**
* Get auth_PROFILE_STATUS - PROFILE_STATUS
* @return string
*/
public function getAuth_PROFILE_STATUS () {
	$data = $this->auth_PROFILE_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PROFILE_STATUS")->isEmpty($data)) {
		return $this->getValueFromParent("auth_PROFILE_STATUS");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_PROFILE_STATUS - PROFILE_STATUS
* @param string $auth_PROFILE_STATUS
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_PROFILE_STATUS ($auth_PROFILE_STATUS) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_PROFILE_STATUS");
	$this->auth_PROFILE_STATUS = $auth_PROFILE_STATUS;
	return $this;
}

/**
* Get auth_FILTER_STATUS - FILTER_STATUS
* @return string
*/
public function getAuth_FILTER_STATUS () {
	$data = $this->auth_FILTER_STATUS;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_FILTER_STATUS")->isEmpty($data)) {
		return $this->getValueFromParent("auth_FILTER_STATUS");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_FILTER_STATUS - FILTER_STATUS
* @param string $auth_FILTER_STATUS
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function setAuth_FILTER_STATUS ($auth_FILTER_STATUS) {
	$fd = $this->getDefinition()->getFieldDefinition("auth_FILTER_STATUS");
	$this->auth_FILTER_STATUS = $auth_FILTER_STATUS;
	return $this;
}

}

