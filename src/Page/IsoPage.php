<?php

namespace Nemundo\Iso\Page;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Iso\Com\ListBox\CountryListBox;
use Nemundo\Iso\Data\Region\RegionReader;

class IsoPage extends AbstractTemplateDocument
{

    public function getContent()
    {

        $form = new SearchForm($this);

        $country = new CountryListBox($form);
        $country->submitOnChange = true;


        if ($country->hasValue()) {

            $reader = new RegionReader();
            $reader->filter->andEqual($reader->model->countryId, $country->getValue());
            $reader->addOrder($reader->model->region);

            $table = new AdminTable($this);

            $header = new TableHeader($table);
            $header->addText($reader->model->code->label);
            $header->addText($reader->model->region->label);


            foreach ($reader->getData() as $regionRow) {

                $row = new TableRow($table);
                $row->addText($regionRow->code);
                $row->addText($regionRow->region);

            }

        }

        return parent::getContent();
    }
}