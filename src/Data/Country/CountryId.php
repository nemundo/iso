<?php
namespace Nemundo\Iso\Data\Country;
use Nemundo\Model\Id\AbstractModelIdValue;
class CountryId extends AbstractModelIdValue {
/**
* @var CountryModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
}