<?php

namespace Nemundo\Iso\Import;


use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Language\LanguageCode;
use Nemundo\Iso\Content\Country\CountryContentType;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Data\Country\CountryDelete;
use Nemundo\Iso\Data\Country\CountryUpdate;
use Nemundo\Iso\Reader\Country\CountryIsoCsvReader;

class CountryImport extends AbstractBase
{

    public function importCountry()
    {

        (new CountryDelete())->delete();

        $reader = new CountryIsoCsvReader();
        foreach ($reader->getData() as $item) {


            $type=new CountryContentType();
            $type->code = $item->isoCode;
            $type->country[LanguageCode::EN] = $item->country;
            $type->saveType();


            /*
            $data = new Country();
            $data->code = $item->isoCode;
            $data->country[LanguageCode::EN] = $item->country;
            $id = $data->save();

            $update = new CountryUpdate();
            $update->country[LanguageCode::DE] = $item->country.' dütsch';
            $update->updateById($id);*/




            //(new \Nemundo\Core\Debug\Debug())->write($item->isoCode . ' - ' . $item->country);
        }


    }

}