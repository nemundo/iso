<?php
namespace Nemundo\Iso\Data\Region;
class RegionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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

protected function loadModel() {
$this->tableName = "iso_region";
$this->aliasTableName = "iso_region";
$this->label = "Region";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "iso_region";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "iso_region_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;
$this->id->visible->form = false;
$this->id->visible->table = false;
$this->id->visible->view = false;
$this->id->visible->form = false;

$this->countryId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->countryId->tableName = "iso_region";
$this->countryId->fieldName = "country";
$this->countryId->aliasFieldName = "iso_region_country";
$this->countryId->label = "Country";
$this->countryId->allowNullValue = false;

$this->code = new \Nemundo\Model\Type\Text\TextType($this);
$this->code->tableName = "iso_region";
$this->code->fieldName = "code";
$this->code->aliasFieldName = "iso_region_code";
$this->code->label = "Code";
$this->code->allowNullValue = false;
$this->code->length = 10;

$this->region = new \Nemundo\Model\Type\Text\TextType($this);
$this->region->tableName = "iso_region";
$this->region->fieldName = "region";
$this->region->aliasFieldName = "iso_region_region";
$this->region->label = "Region";
$this->region->allowNullValue = false;
$this->region->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "code";
$index->addType($this->code);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "country";
$index->addType($this->countryId);
$index->addType($this->region);

}
public function loadCountry() {
if ($this->country == null) {
$this->country = new \Nemundo\Iso\Data\Country\CountryExternalType($this, "iso_region_country");
$this->country->tableName = "iso_region";
$this->country->fieldName = "country";
$this->country->aliasFieldName = "iso_region_country";
$this->country->label = "Country";
}
return $this;
}
}