<?php
namespace Nemundo\Iso\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class IsoCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Iso\Data\Country\CountryModel());
$this->addModel(new \Nemundo\Iso\Data\Region\RegionModel());
}
}