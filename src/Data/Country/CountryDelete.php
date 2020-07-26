<?php
namespace Nemundo\Iso\Data\Country;
class CountryDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var CountryModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
}