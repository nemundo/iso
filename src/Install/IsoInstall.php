<?php

namespace Nemundo\Iso\Install;

use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Iso\Script\IsoImportScript;
use Nemundo\Project\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Iso\Data\IsoCollection;
use Nemundo\Iso\Application\IsoApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;

class IsoInstall extends AbstractInstall
{
    public function install()
    {


        (new ApplicationSetup())->addApplication(new IsoApplication());
        (new ModelCollectionSetup())->addCollection(new IsoCollection());


        (new ScriptSetup())
            ->addScript(new IsoImportScript());







    }
}