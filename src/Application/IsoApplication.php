<?php

namespace Nemundo\Iso\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Iso\Data\IsoModelCollection;
use Nemundo\Iso\Install\IsoInstall;
use Nemundo\Iso\Install\IsoUninstall;
use Nemundo\Iso\Site\IsoSite;

class IsoApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Iso';
        $this->applicationId = '2530dc9f-7d4d-49f4-9191-694aeaf33efd';
        $this->modelCollectionClass = IsoModelCollection::class;
        $this->installClass = IsoInstall::class;
        $this->uninstallClass=IsoUninstall::class;
        $this->siteClass = IsoSite::class;
    }
}