<?php

namespace Nemundo\Iso\Import;


use Nemundo\Core\Base\AbstractBase;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Reader\Country\CountryIsoCsvReader;

class CountryImport extends AbstractBase
{

    public function importCountry() {


        $reader = new CountryIsoCsvReader();
        foreach ($reader->getData() as $item) {


            $data=new Country();
            $data->code=$item->isoCode;

            $data->country['en']=$item->country;

          $data->save();


            (new \Nemundo\Core\Debug\Debug())->write($item->isoCode . ' - ' . $item->country);
        }





    }

}