<?php

namespace Nemundo\Iso\Parameter;

use Nemundo\Iso\Data\Country\CountryReader;
use Nemundo\Web\Parameter\AbstractUrlParameter;

class CountryParameter extends AbstractUrlParameter
{

    protected function loadParameter()
    {

        $this->parameterName = 'country';

    }


    public function getCountryRow()
    {

        return (new CountryReader())->getRowById($this->getValue());

    }

}