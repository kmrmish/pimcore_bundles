<?php 

/** 
* Generated at: 2018-12-24T20:20:41+01:00


Fields Summary: 
 - lumen [numeric]
 - lightDistance [numeric]
 - lightDuration [numeric]
 - ledType [input]
 - ledBoost [input]
 - ledRed [input]
 - waterResistant [input]
 - batteries [input]
 - weight [input]
 - hasFlashingMode [checkbox]
 - isCeApproved [checkbox]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesHeadlamps extends DataObject\Objectbrick\Data\AbstractData implements \Pimcore\Model\DataObject\DirtyIndicatorInterface {



use \Pimcore\Model\DataObject\Traits\DirtyIndicatorTrait;

protected $type = "featuresHeadlamps";
protected $lumen;
protected $lightDistance;
protected $lightDuration;
protected $ledType;
protected $ledBoost;
protected $ledRed;
protected $waterResistant;
protected $batteries;
protected $weight;
protected $hasFlashingMode;
protected $isCeApproved;


/**
* Get lumen - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/lumen.png"/> Lumen
* @return float
*/
public function getLumen () {
	$data = $this->lumen;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("lumen")->isEmpty($data)) {
		return $this->getValueFromParent("lumen");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set lumen - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/lumen.png"/> Lumen
* @param float $lumen
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLumen ($lumen) {
	$fd = $this->getDefinition()->getFieldDefinition("lumen");
	$this->lumen = $lumen;
	return $this;
}

/**
* Get lightDistance - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/light_distance.png"/> Light Distance
* @return float
*/
public function getLightDistance () {
	$data = $this->lightDistance;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("lightDistance")->isEmpty($data)) {
		return $this->getValueFromParent("lightDistance");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set lightDistance - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/light_distance.png"/> Light Distance
* @param float $lightDistance
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLightDistance ($lightDistance) {
	$fd = $this->getDefinition()->getFieldDefinition("lightDistance");
	$this->lightDistance = $lightDistance;
	return $this;
}

/**
* Get lightDuration - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/light_duration.png"/> Light Duration
* @return float
*/
public function getLightDuration () {
	$data = $this->lightDuration;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("lightDuration")->isEmpty($data)) {
		return $this->getValueFromParent("lightDuration");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set lightDuration - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/light_duration.png"/> Light Duration
* @param float $lightDuration
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLightDuration ($lightDuration) {
	$fd = $this->getDefinition()->getFieldDefinition("lightDuration");
	$this->lightDuration = $lightDuration;
	return $this;
}

/**
* Get ledType - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_power.png"/> LED Types
* @return string
*/
public function getLedType () {
	$data = $this->ledType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ledType")->isEmpty($data)) {
		return $this->getValueFromParent("ledType");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set ledType - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_power.png"/> LED Types
* @param string $ledType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLedType ($ledType) {
	$fd = $this->getDefinition()->getFieldDefinition("ledType");
	$this->ledType = $ledType;
	return $this;
}

/**
* Get ledBoost - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_boost.png"/> LED Boost
* @return string
*/
public function getLedBoost () {
	$data = $this->ledBoost;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ledBoost")->isEmpty($data)) {
		return $this->getValueFromParent("ledBoost");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set ledBoost - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_boost.png"/> LED Boost
* @param string $ledBoost
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLedBoost ($ledBoost) {
	$fd = $this->getDefinition()->getFieldDefinition("ledBoost");
	$this->ledBoost = $ledBoost;
	return $this;
}

/**
* Get ledRed - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_red.png"/> Red LED
* @return string
*/
public function getLedRed () {
	$data = $this->ledRed;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ledRed")->isEmpty($data)) {
		return $this->getValueFromParent("ledRed");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set ledRed - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/led_red.png"/> Red LED
* @param string $ledRed
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setLedRed ($ledRed) {
	$fd = $this->getDefinition()->getFieldDefinition("ledRed");
	$this->ledRed = $ledRed;
	return $this;
}

/**
* Get waterResistant - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/water_resistant.png"/> Water Resistant
* @return string
*/
public function getWaterResistant () {
	$data = $this->waterResistant;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("waterResistant")->isEmpty($data)) {
		return $this->getValueFromParent("waterResistant");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set waterResistant - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/water_resistant.png"/> Water Resistant
* @param string $waterResistant
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setWaterResistant ($waterResistant) {
	$fd = $this->getDefinition()->getFieldDefinition("waterResistant");
	$this->waterResistant = $waterResistant;
	return $this;
}

/**
* Get batteries - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/batteries.png"/> Battery Information
* @return string
*/
public function getBatteries () {
	$data = $this->batteries;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("batteries")->isEmpty($data)) {
		return $this->getValueFromParent("batteries");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set batteries - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/batteries.png"/> Battery Information
* @param string $batteries
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setBatteries ($batteries) {
	$fd = $this->getDefinition()->getFieldDefinition("batteries");
	$this->batteries = $batteries;
	return $this;
}

/**
* Get weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/weight_with_batteries.png"/> Weight with Batteries
* @return string
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/weight_with_batteries.png"/> Weight with Batteries
* @param string $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setWeight ($weight) {
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $weight;
	return $this;
}

/**
* Get hasFlashingMode - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/flashing_mode.png"/> Has Flashing Mode
* @return boolean
*/
public function getHasFlashingMode () {
	$data = $this->hasFlashingMode;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hasFlashingMode")->isEmpty($data)) {
		return $this->getValueFromParent("hasFlashingMode");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set hasFlashingMode - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/flashing_mode.png"/> Has Flashing Mode
* @param boolean $hasFlashingMode
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setHasFlashingMode ($hasFlashingMode) {
	$fd = $this->getDefinition()->getFieldDefinition("hasFlashingMode");
	$this->hasFlashingMode = $hasFlashingMode;
	return $this;
}

/**
* Get isCeApproved - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/ce.png"/> Is CE Approved
* @return boolean
*/
public function getIsCeApproved () {
	$data = $this->isCeApproved;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("isCeApproved")->isEmpty($data)) {
		return $this->getValueFromParent("isCeApproved");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set isCeApproved - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/headlamps/ce.png"/> Is CE Approved
* @param boolean $isCeApproved
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesHeadlamps
*/
public function setIsCeApproved ($isCeApproved) {
	$fd = $this->getDefinition()->getFieldDefinition("isCeApproved");
	$this->isCeApproved = $isCeApproved;
	return $this;
}

}

