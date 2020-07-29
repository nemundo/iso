<?php


namespace Nemundo\Iso\Directory;


use Nemundo\Core\Directory\AbstractKeyValueDirectory;
use Nemundo\Iso\Data\Region\Region;
use Nemundo\Iso\Data\Region\RegionReader;


class RegionDirectory extends AbstractKeyValueDirectory
{

    protected function loadDirectory()
    {

        $regionReader = new RegionReader();
        foreach ($regionReader->getData() as $regionRow) {
            $this->addKeyValue($regionRow->id, $regionRow->code);
        }


    }


    protected function onNotExists($value)
    {

        /* $data=new Country();
         $data->code = $value;
         $id=$data->save();

         $this->addKeyValue($id,$value);*/

    }


    public function getRegionId($code, $region)
    {

        $countryId = null;
        if ($this->existsValue($code)) {
            $countryId = $this->getId($code);
        } else {

            $data = new Region();
            $data->code = $code;
            $data->country = $region;
            $countryId = $data->save();

            $this->addKeyValue($countryId, $code);

        }

        return $countryId;


    }


}