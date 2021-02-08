<?php

namespace Nemundo\Iso\Content\Country;

use Nemundo\Content\Index\Tree\Com\Form\ContentSearchForm;
use Nemundo\Content\Type\AbstractContentType;
use Nemundo\Content\Type\AbstractSearchContentType;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Data\Country\CountryCount;
use Nemundo\Iso\Data\Country\CountryDelete;
use Nemundo\Iso\Data\Country\CountryId;
use Nemundo\Iso\Data\Country\CountryReader;
use Nemundo\Iso\Data\Country\CountryRow;

class CountryContentType extends AbstractSearchContentType
{

    public $code;

    public $country;


    protected function loadContentType()
    {
        $this->typeLabel = 'Country';
        $this->typeId = 'd58b6fc2-343e-403d-90c0-851669a80000';
        //$this->formClassList[] = CountryContentForm::class;
        $this->formClassList[]=ContentSearchForm::class;
        $this->viewClassList[] = CountryContentView::class;
    }

    protected function onCreate()
    {

        $data = new Country();
        $data->code = $this->code;
        $data->country = $this->country;
        $this->dataId = $data->save();


    }

    protected function onUpdate()
    {
    }


    protected function onDelete()
    {
        (new CountryDelete())->deleteById($this->dataId);
    }


    protected function onIndex()
    {

        $this->addSearchText($this->getDataRow()->code);
        $this->addSearchText($this->getDataRow()->country);

    }

    protected function onDataRow()
    {
        $this->dataRow = (new CountryReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|CountryRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function existItem()
    {

        $value = false;

        $count = new CountryCount();
        $count->filter->andEqual($count->model->code, $this->code);
        if ($count->getCount() == 1) {
            $value = true;

            $id = new CountryId();
            $id->filter->andEqual($id->model->code,$this->code);
            $this->dataId=$id->getId();

        }

        return $value;

    }


    public function getSubject()
    {
        return $this->getDataRow()->country;
    }

}