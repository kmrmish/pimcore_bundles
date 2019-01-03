<?php 

/** 
* Generated at: 2018-12-24T20:20:24+01:00
* Inheritance: no
* Variants: no


Fields Summary: 
- active [checkbox]
- gender [gender]
- firstname [firstname]
- lastname [lastname]
- email [email]
- street [input]
- zip [input]
- city [input]
- countryCode [country]
- phone [input]
- idEncoded [input]
- manualSegments [objectsMetadata]
- calculatedSegments [objectsMetadata]
- password [password]
- ssoIdentities [objects]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\Customer\Listing getByActive ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByGender ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByStreet ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByZip ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByCity ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByCountryCode ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByPhone ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByIdEncoded ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByManualSegments ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByCalculatedSegments ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getByPassword ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Customer\Listing getBySsoIdentities ($value, $limit = 0) 
*/

class Customer extends \CustomerManagementFrameworkBundle\Model\AbstractCustomer\DefaultAbstractUserawareCustomer implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $o_classId = "41";
protected $o_className = "Customer";
protected $active;
protected $gender;
protected $firstname;
protected $lastname;
protected $email;
protected $street;
protected $zip;
protected $city;
protected $countryCode;
protected $phone;
protected $idEncoded;
protected $manualSegments;
protected $calculatedSegments;
protected $password;
protected $ssoIdentities;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Customer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get active - Active
* @return boolean
*/
public function getActive () {
	$preValue = $this->preGetValue("active"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->active;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set active - Active
* @param boolean $active
* @return \Pimcore\Model\DataObject\Customer
*/
public function setActive ($active) {
	$fd = $this->getClass()->getFieldDefinition("active");
	$this->active = $active;
	return $this;
}

/**
* Get gender - Gender
* @return string
*/
public function getGender () {
	$preValue = $this->preGetValue("gender"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gender;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set gender - Gender
* @param string $gender
* @return \Pimcore\Model\DataObject\Customer
*/
public function setGender ($gender) {
	$fd = $this->getClass()->getFieldDefinition("gender");
	$this->gender = $gender;
	return $this;
}

/**
* Get firstname - Firstname
* @return string
*/
public function getFirstname () {
	$preValue = $this->preGetValue("firstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->firstname;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set firstname - Firstname
* @param string $firstname
* @return \Pimcore\Model\DataObject\Customer
*/
public function setFirstname ($firstname) {
	$fd = $this->getClass()->getFieldDefinition("firstname");
	$this->firstname = $firstname;
	return $this;
}

/**
* Get lastname - Lastname
* @return string
*/
public function getLastname () {
	$preValue = $this->preGetValue("lastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lastname;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set lastname - Lastname
* @param string $lastname
* @return \Pimcore\Model\DataObject\Customer
*/
public function setLastname ($lastname) {
	$fd = $this->getClass()->getFieldDefinition("lastname");
	$this->lastname = $lastname;
	return $this;
}

/**
* Get email - Email
* @return string
*/
public function getEmail () {
	$preValue = $this->preGetValue("email"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->email;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set email - Email
* @param string $email
* @return \Pimcore\Model\DataObject\Customer
*/
public function setEmail ($email) {
	$fd = $this->getClass()->getFieldDefinition("email");
	$this->email = $email;
	return $this;
}

/**
* Get street - Street
* @return string
*/
public function getStreet () {
	$preValue = $this->preGetValue("street"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->street;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set street - Street
* @param string $street
* @return \Pimcore\Model\DataObject\Customer
*/
public function setStreet ($street) {
	$fd = $this->getClass()->getFieldDefinition("street");
	$this->street = $street;
	return $this;
}

/**
* Get zip - Zip
* @return string
*/
public function getZip () {
	$preValue = $this->preGetValue("zip"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->zip;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set zip - Zip
* @param string $zip
* @return \Pimcore\Model\DataObject\Customer
*/
public function setZip ($zip) {
	$fd = $this->getClass()->getFieldDefinition("zip");
	$this->zip = $zip;
	return $this;
}

/**
* Get city - City
* @return string
*/
public function getCity () {
	$preValue = $this->preGetValue("city"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->city;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set city - City
* @param string $city
* @return \Pimcore\Model\DataObject\Customer
*/
public function setCity ($city) {
	$fd = $this->getClass()->getFieldDefinition("city");
	$this->city = $city;
	return $this;
}

/**
* Get countryCode - Country
* @return string
*/
public function getCountryCode () {
	$preValue = $this->preGetValue("countryCode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->countryCode;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set countryCode - Country
* @param string $countryCode
* @return \Pimcore\Model\DataObject\Customer
*/
public function setCountryCode ($countryCode) {
	$fd = $this->getClass()->getFieldDefinition("countryCode");
	$this->countryCode = $countryCode;
	return $this;
}

/**
* Get phone - phone
* @return string
*/
public function getPhone () {
	$preValue = $this->preGetValue("phone"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->phone;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set phone - phone
* @param string $phone
* @return \Pimcore\Model\DataObject\Customer
*/
public function setPhone ($phone) {
	$fd = $this->getClass()->getFieldDefinition("phone");
	$this->phone = $phone;
	return $this;
}

/**
* Get idEncoded - Id Encoded
* @return string
*/
public function getIdEncoded () {
	$preValue = $this->preGetValue("idEncoded"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->idEncoded;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set idEncoded - Id Encoded
* @param string $idEncoded
* @return \Pimcore\Model\DataObject\Customer
*/
public function setIdEncoded ($idEncoded) {
	$fd = $this->getClass()->getFieldDefinition("idEncoded");
	$this->idEncoded = $idEncoded;
	return $this;
}

/**
* Get manualSegments - Manual Segments
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getManualSegments () {
	$preValue = $this->preGetValue("manualSegments"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("manualSegments")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set manualSegments - Manual Segments
* @param \Pimcore\Model\DataObject\AbstractObject[] $manualSegments
* @return \Pimcore\Model\DataObject\Customer
*/
public function setManualSegments ($manualSegments) {
	$fd = $this->getClass()->getFieldDefinition("manualSegments");
	$currentData = $this->getManualSegments();
	$isEqual = $fd->isEqual($currentData, $manualSegments);
	if (!$isEqual) {
		$this->markFieldDirty("manualSegments", true);
	}
	$this->manualSegments = $fd->preSetData($this, $manualSegments);
	return $this;
}

/**
* Get calculatedSegments - Calculated Segments
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getCalculatedSegments () {
	$preValue = $this->preGetValue("calculatedSegments"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("calculatedSegments")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set calculatedSegments - Calculated Segments
* @param \Pimcore\Model\DataObject\AbstractObject[] $calculatedSegments
* @return \Pimcore\Model\DataObject\Customer
*/
public function setCalculatedSegments ($calculatedSegments) {
	$fd = $this->getClass()->getFieldDefinition("calculatedSegments");
	$currentData = $this->getCalculatedSegments();
	$isEqual = $fd->isEqual($currentData, $calculatedSegments);
	if (!$isEqual) {
		$this->markFieldDirty("calculatedSegments", true);
	}
	$this->calculatedSegments = $fd->preSetData($this, $calculatedSegments);
	return $this;
}

/**
* Get password - Password
* @return string
*/
public function getPassword () {
	$preValue = $this->preGetValue("password"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->password;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set password - Password
* @param string $password
* @return \Pimcore\Model\DataObject\Customer
*/
public function setPassword ($password) {
	$fd = $this->getClass()->getFieldDefinition("password");
	$this->password = $password;
	return $this;
}

/**
* Get ssoIdentities - SSO Identities
* @return \Pimcore\Model\DataObject\SsoIdentity[]
*/
public function getSsoIdentities () {
	$preValue = $this->preGetValue("ssoIdentities"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("ssoIdentities")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set ssoIdentities - SSO Identities
* @param \Pimcore\Model\DataObject\SsoIdentity[] $ssoIdentities
* @return \Pimcore\Model\DataObject\Customer
*/
public function setSsoIdentities ($ssoIdentities) {
	$fd = $this->getClass()->getFieldDefinition("ssoIdentities");
	$currentData = $this->getSsoIdentities();
	$isEqual = $fd->isEqual($currentData, $ssoIdentities);
	if (!$isEqual) {
		$this->markFieldDirty("ssoIdentities", true);
	}
	$this->ssoIdentities = $fd->preSetData($this, $ssoIdentities);
	return $this;
}

protected static $_relationFields = array (
  'manualSegments' => 
  array (
    'type' => 'objectsMetadata',
  ),
  'calculatedSegments' => 
  array (
    'type' => 'objectsMetadata',
  ),
  'ssoIdentities' => 
  array (
    'type' => 'objects',
  ),
);

protected $lazyLoadedFields = array (
  0 => 'manualSegments',
  1 => 'calculatedSegments',
  2 => 'ssoIdentities',
);

}

