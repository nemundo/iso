<?php
namespace Nemundo\Iso\Data\Country;
class CountryPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var CountryModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
/**
* @return CountryRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new CountryRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}