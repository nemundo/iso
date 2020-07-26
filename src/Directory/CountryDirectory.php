<?php


namespace Nemundo\Iso\Directory;


use Nemundo\Core\Directory\AbstractKeyValueDirectory;
use Nemundo\Iso\Data\Country\Country;
use Nemundo\Iso\Data\Country\CountryReader;


class CountryDirectory extends AbstractKeyValueDirectory
{

    protected function loadDirectory()
    {

        $countryReader=new CountryReader();
        foreach ($countryReader->getData() as $countryRow) {
            $this->addKeyValue($countryRow->id,$countryRow->code);
        }


    }



    protected function onNotExists($value)
    {

       /* $data=new Country();
        $data->code = $value;
        $id=$data->save();

        $this->addKeyValue($id,$value);*/

    }


    public function getCountryId($code, $country='')
    {

        $countryId = null;
        if ($this->existsValue($code)) {
            $countryId=$this->getId($code);
        } else {

            $data=new Country();
            $data->code = $code;
            $data->country=$country;
            $countryId=$data->save();

            $this->addKeyValue($countryId,$code);

        }

        return  $countryId;


    }


}