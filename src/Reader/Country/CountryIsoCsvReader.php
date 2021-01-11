<?php


namespace Nemundo\Iso\Reader\Country;


use Nemundo\Core\Base\DataSource\AbstractDataSource;
use Nemundo\Core\Csv\CsvSeperator;
use Nemundo\Core\Csv\Reader\CsvReader;
use Nemundo\Core\Path\Path;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\IsoProject;

class CountryIsoCsvReader extends AbstractDataSource
{

    protected function loadData()
    {
        // TODO: Implement loadData() method.

        $reader = new CsvReader();
        $reader->separator = CsvSeperator::COMMA;
        $reader->useFirstRowAsHeader = false;
        $reader->filename = (new Path((new IsoProject())->path))
            ->addPath('..')
            ->addPath('data')
            ->addPath('german-iso-3166.csv.txt')
            ->getFilename();
        foreach ($reader->getData() as $csvRow) {
            //$country->getCountryId($csvRow->getValueByNumber(0),$csvRow->getValueByNumber(1));


            $item=new IsoItem();
            $item->isoCode= $csvRow->getValueByNumber(0);
            $item->country= $csvRow->getValueByNumber(1);
            $this->addItem($item);

            /*
            $data = new Country();
            $data->updateOnDuplicate = true;
            $data->code = $csvRow->getValueByNumber(0);
            $data->country = $csvRow->getValueByNumber(1);
            $data->save();*/

        }


    }


    /**
     * @return IsoItem[]
     */
    public function getData()
    {
        return parent::getData(); // TODO: Change the autogenerated stub
    }

}