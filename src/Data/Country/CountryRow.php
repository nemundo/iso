<?php
namespace Nemundo\Iso\Data\Country;
class CountryRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CountryModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $country;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->code = $this->getModelValue($model->code);
$this->country = $this->getModelValue($model->country);
}
}