<?php

require __DIR__ . '/../config.php';

$reader = new \Nemundo\Iso\Reader\Country\CountryIsoCsvReader();
foreach ($reader->getData() as $item) {
    (new \Nemundo\Core\Debug\Debug())->write($item->isoCode . ' - ' . $item->country);
}



