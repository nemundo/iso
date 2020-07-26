<?php
namespace Nemundo\Iso\Data\Region;
class RegionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $countryId;

/**
* @var \Nemundo\Iso\Data\Country\CountryExternalType
*/
public $country;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $code;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $region;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = RegionModel::class;
$this->externalTableName = "iso_region";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->countryId = new \Nemundo\Model\Type\Id\IdType();
$this->countryId->fieldName = "country";
$this->countryId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->countryId->aliasFieldName = $this->countryId->tableName ."_".$this->countryId->fieldName;
$this->countryId->label = "Country";
$this->addType($this->countryId);

$this->code = new \Nemundo\Model\Type\Text\TextType();
$this->code->fieldName = "code";
$this->code->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->code->aliasFieldName = $this->code->tableName . "_" . $this->code->fieldName;
$this->code->label = "Code";
$this->addType($this->code);

$this->region = new \Nemundo\Model\Type\Text\TextType();
$this->region->fieldName = "region";
$this->region->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->region->aliasFieldName = $this->region->tableName . "_" . $this->region->fieldName;
$this->region->label = "Region";
$this->addType($this->region);

}
public function loadCountry() {
if ($this->country == null) {
$this->country = new \Nemundo\Iso\Data\Country\CountryExternalType(null, $this->parentFieldName . "_country");
$this->country->fieldName = "country";
$this->country->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->country->aliasFieldName = $this->country->tableName ."_".$this->country->fieldName;
$this->country->label = "Country";
$this->addType($this->country);
}
return $this;
}
}