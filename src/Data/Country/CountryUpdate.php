<?php
namespace Nemundo\Iso\Data\Country;
use Nemundo\Model\Data\AbstractModelUpdate;
use Nemundo\Core\Language\LanguageConfig;
use Nemundo\Model\Type\Text\TextType;
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
* @var string[]
*/
public $country;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
foreach (LanguageConfig::$languageList as $language) {
if (isset($this->country[$language])) {
$type = new TextType();
$type->fieldName = $this->model->country->fieldName."_" . $language;
$this->typeValueList->setModelValue($type, $this->country[$language]);
}
}
parent::update();
}
}