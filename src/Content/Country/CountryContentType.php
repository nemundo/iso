<?php

namespace Nemundo\Iso\Content\Country;

use Nemundo\Content\Type\AbstractContentType;
use Nemundo\Iso\Data\Country\Country;

class CountryContentType extends AbstractContentType
{

    public $code;

    public $country;


    protected function loadContentType()
    {
        $this->typeLabel = 'Country';
        $this->typeId = 'd58b6fc2-343e-403d-90c0-851669a80000';
        $this->formClassList[] = CountryContentForm::class;
        $this->viewClassList[] = CountryContentView::class;
    }

    protected function onCreate()
    {

        $data=new Country();
        $data->code=$this->code;
        $data->country=$this->country;
        $this->dataId=$data->save();


    }

    protected function onUpdate()
    {
    }

    protected function onIndex()
    {
    }

    protected function onDataRow()
    {
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }
}