<?php
namespace Nemundo\Iso\Data\Country;
use Nemundo\Model\Data\AbstractModelUpdate;
class CountryUpdate extends AbstractModelUpdate {
/**
* @var CountryModel
*/
public $model;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $country;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->country, $this->country);
parent::update();
}
}