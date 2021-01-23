<?php
namespace Nemundo\Iso\Data\Country;
class Country extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var CountryModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->code, $this->code);





$this->typeValueList->setModelValue($this->model->country, $this->country);




$id = parent::save();
return $id;
}
}