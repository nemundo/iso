<?php
namespace Nemundo\Iso\Data\Region;
class Region extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var RegionModel
*/
protected $model;

/**
* @var string
*/
public $countryId;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $region;

public function __construct() {
parent::__construct();
$this->model = new RegionModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->countryId, $this->countryId);
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->region, $this->region);
$id = parent::save();
return $id;
}
}