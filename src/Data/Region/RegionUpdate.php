<?php
namespace Nemundo\Iso\Data\Region;
use Nemundo\Model\Data\AbstractModelUpdate;
class RegionUpdate extends AbstractModelUpdate {
/**
* @var RegionModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->countryId, $this->countryId);
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->region, $this->region);
parent::update();
}
}