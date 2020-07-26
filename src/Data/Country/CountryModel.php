<?php
namespace Nemundo\Iso\Data\Country;
class CountryModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "iso_country";
$this->aliasTableName = "iso_country";
$this->label = "Country";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "iso_country";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "iso_country_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;
$this->id->visible->form = false;
$this->id->visible->table = false;
$this->id->visible->view = false;
$this->id->visible->form = false;

$this->code = new \Nemundo\Model\Type\Text\TextType($this);
$this->code->tableName = "iso_country";
$this->code->fieldName = "code";
$this->code->aliasFieldName = "iso_country_code";
$this->code->label = "Code";
$this->code->allowNullValue = false;
$this->code->length = 10;

$this->country = new \Nemundo\Model\Type\Text\TextType($this);
$this->country->tableName = "iso_country";
$this->country->fieldName = "country";
$this->country->aliasFieldName = "iso_country_country";
$this->country->label = "Country";
$this->country->allowNullValue = false;
$this->country->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "code";
$index->addType($this->code);

}
}