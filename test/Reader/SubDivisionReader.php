<?php

require __DIR__ . '/../config.php';


$reader = new \Nemundo\Iso\Reader\SubDivisonIsoCsvReader();

foreach ($reader->getData() as $item) {

    (new \Nemundo\Core\Debug\Debug())->write($item->provinceCode);

}



