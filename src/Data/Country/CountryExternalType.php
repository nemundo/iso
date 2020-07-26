<?php
namespace Nemundo\Iso\Data\Country;
class CountryExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $code;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $country;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = CountryModel::class;
$this->externalTableName = "iso_country";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->code = new \Nemundo\Model\Type\Text\TextType();
$this->code->fieldName = "code";
$this->code->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->code->aliasFieldName = $this->code->tableName . "_" . $this->code->fieldName;
$this->code->label = "Code";
$this->addType($this->code);

$this->country = new \Nemundo\Model\Type\Text\TextType();
$this->country->fieldName = "country";
$this->country->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->country->aliasFieldName = $this->country->tableName . "_" . $this->country->fieldName;
$this->country->label = "Country";
$this->addType($this->country);

}
}