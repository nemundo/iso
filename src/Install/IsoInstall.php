<?php

namespace Nemundo\Iso\Install;

use Nemundo\App\Application\Setup\ApplicationSetup;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Iso\Application\IsoApplication;
use Nemundo\Iso\Data\IsoModelCollection;
use Nemundo\Iso\Script\IsoImportScript;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Project\Install\AbstractInstall;

class IsoInstall extends AbstractInstall
{
    public function install()
    {


        (new ApplicationSetup())->addApplication(new IsoApplication());
        (new ModelCollectionSetup())->addCollection(new IsoModelCollection());


        (new ScriptSetup())
            ->addScript(new IsoImportScript());


    }
}