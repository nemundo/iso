<?php


namespace Nemundo\Iso\Script;


use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Csv\CsvSeperator;
use Nemundo\Core\Csv\Reader\CsvReader;
use Nemundo\Core\Path\Path;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Data\Region\Region;
use Nemundo\Iso\Directory\CountryDirectory;
use Nemundo\Iso\IsoProject;

class IsoImportScript extends AbstractConsoleScript
{

    protected function loadScript()
    {

        $this->scriptName = 'iso-import';
    }


    public function run()
    {


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

            $data = new Country();
            $data->updateOnDuplicate = true;
            $data->code = $csvRow->getValueByNumber(0);
            $data->country = $csvRow->getValueByNumber(1);
            $data->save();

        }


        $country = new CountryDirectory();

        $reader = new CsvReader();
        $reader->separator = CsvSeperator::COMMA;
        $reader->filename = (new Path((new IsoProject())->path))
            ->addPath('..')
            ->addPath('data')
            ->addPath('IP2LOCATION-ISO3166-2.CSV')
            ->getFilename();
        foreach ($reader->getData() as $csvRow) {


            //(new Debug())->write($csvRow->getValue('subdivision_name'));


            $countryId = $country->getCountryId($csvRow->getValue('country_code'));

            $data = new Region();
            $data->updateOnDuplicate = true;
            $data->countryId = $countryId;
            $data->region = $csvRow->getValue('subdivision_name');
            $data->code = $csvRow->getValue('code');
            $data->save();

        }

    }

}