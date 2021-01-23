<?php
namespace Nemundo\Iso\Content\Country;
use Nemundo\Content\Form\AbstractContentForm;
class CountryContentForm extends AbstractContentForm {
/**
* @var CountryContentType
*/
public $contentType;

public function getContent() {
return parent::getContent();
}
public function onSubmit() {
$this->contentType->saveType();
}
}