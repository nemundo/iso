<?php
namespace Nemundo\Iso\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class CountryParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'country';
}
}