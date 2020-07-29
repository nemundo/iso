<?php

namespace Nemundo\Iso\Com\ListBox;

use Nemundo\Iso\Data\Country\CountryReader;
use Nemundo\Iso\Parameter\CountryParameter;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;

class CountryListBox extends BootstrapListBox
{

    protected function loadContainer()
    {

        parent::loadContainer();
        $this->label = 'Country';
        $this->name = (new CountryParameter())->getParameterName();

    }


    public function getContent()
    {

        $reader = new CountryReader();
        $reader->addOrder($reader->model->country);
        foreach ($reader->getData() as $countryRow) {
            $label = $countryRow->country . ' (' . $countryRow->code . ')';
            $this->addItem($countryRow->id, $label);
        }

        return parent::getContent();

    }
}