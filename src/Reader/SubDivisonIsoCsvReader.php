<?php


namespace Nemundo\Iso\Reader;


use Nemundo\Core\Base\DataSource\AbstractDataSource;
use Nemundo\Core\Csv\CsvSeperator;
use Nemundo\Core\Csv\Reader\CsvReader;
use Nemundo\Core\Path\Path;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Data\Region\Region;
use Nemundo\Iso\IsoProject;


// ISO 3166-2

// SubDivisonCountryReader
class SubDivisonIsoCsvReader extends AbstractDataSource
{


    // country filter

    protected function loadData()
    {
        // TODO: Implement loadData() method.

        $reader = new CsvReader();
        $reader->separator = CsvSeperator::COMMA;
        $reader->filename = (new Path((new IsoProject())->path))
            ->addPath('..')
            ->addPath('data')
            ->addPath('IP2LOCATION-ISO3166-2.CSV')
            ->getFilename();
        foreach ($reader->getData() as $csvRow) {


            $item=new ProvinceItem();
            $item->countryCode= $csvRow->getValue('country_code');
            $item->provinceCode=$csvRow->getValue('code');
            $item->province= $csvRow->getValue('subdivision_name');
            $this->addItem($item);

            //(new Debug())->write($csvRow->getValue('subdivision_name'));


            /*$countryId = $country->getCountryId($csvRow->getValue('country_code'));


            $data = new Region();
            $data->updateOnDuplicate = true;
            $data->countryId = $countryId;
            $data->region = $csvRow->getValue('subdivision_name');
            $data->code = $csvRow->getValue('code');
            $data->save();*/


        }

    }


    /**
     * @return ProvinceItem[]
     */
    public function getData()
    {
        return parent::getData();
    }

}