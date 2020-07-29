<?php

namespace Nemundo\Iso\Com\ListBox;

use Nemundo\Iso\Data\Region\RegionReader;
use Nemundo\Iso\Parameter\RegionParameter;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;

class RegionListBox extends BootstrapListBox
{

    public $countryId;


    protected function loadContainer()
    {
        parent::loadContainer();
        $this->label = 'Region';
        $this->name = (new RegionParameter())->getParameterName();

    }


    public function getContent()
    {


        if ($this->countryId !== null) {

            $reader = new RegionReader();
            $reader->filter->andEqual($reader->model->countryId, $this->countryId);
            $reader->addOrder($reader->model->region);
            foreach ($reader->getData() as $regionRow) {
                $label = $regionRow->region . ' (' . $regionRow->code . ')';
                $this->addItem($regionRow->id, $label);
            }


        }


        return parent::getContent();
    }
}