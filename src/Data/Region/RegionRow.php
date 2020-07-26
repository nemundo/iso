<?php
namespace Nemundo\Iso\Data\Region;
class RegionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var RegionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $countryId;

/**
* @var \Nemundo\Iso\Data\Country\CountryRow
*/
public $country;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $region;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->countryId = intval($this->getModelValue($model->countryId));
if ($model->country !== null) {
$this->loadNemundoIsoDataCountryCountrycountryRow($model->country);
}
$this->code = $this->getModelValue($model->code);
$this->region = $this->getModelValue($model->region);
}
private function loadNemundoIsoDataCountryCountrycountryRow($model) {
$this->country = new \Nemundo\Iso\Data\Country\CountryRow($this->row, $model);
}
}