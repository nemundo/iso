<?php
namespace Nemundo\Iso\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class RegionParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'region';
}
}