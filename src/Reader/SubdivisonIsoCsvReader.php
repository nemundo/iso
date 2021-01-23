<?php


namespace Nemundo\Iso\Reader;


use Nemundo\Core\Base\DataSource\AbstractDataSource;
use Nemundo\Core\Csv\CsvSeperator;
use Nemundo\Core\Csv\Reader\CsvReader;
use Nemundo\Core\Path\Path;
use Nemundo\Iso\IsoProject;


// ISO 3166-2

class SubdivisonIsoCsvReader extends AbstractDataSource
{

    public $countryFilter;


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

            $addItem = true;

            $item = new SubdivisonItem();
            $item->countryCode = trim($csvRow->getValue('country_code'));
            $item->code = $csvRow->getValue('code');
            $item->subdivision = $csvRow->getValue('subdivision_name');

            if ($this->countryFilter !== null) {
                if ($item->countryCode != $this->countryFilter) {
                    $addItem = false;
                }
            }

            if ($addItem) {
                $this->addItem($item);
            }

        }

    }


    /**
     * @return SubdivisonItem[]
     */
    public function getData()
    {
        return parent::getData();
    }

}