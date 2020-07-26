<?php
namespace Nemundo\Iso\Data\Country;
class CountryReader extends \Nemundo\Model\Reader\ModelDataReader {
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
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return CountryRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return CountryRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new CountryRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}