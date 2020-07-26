<?php

namespace Nemundo\Iso\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Iso\Data\IsoCollection;

class IsoApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Iso';
        $this->applicationId = '2530dc9f-7d4d-49f4-9191-694aeaf33efd';
        $this->modelCollectionClass=IsoCollection::class;
    }
}