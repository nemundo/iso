<?php

namespace Nemundo\Iso\Install;

use Nemundo\App\Application\Setup\ApplicationSetup;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Content\App\Job\Setup\JobSetup;
use Nemundo\Content\Setup\ContentTypeSetup;
use Nemundo\Iso\Application\IsoApplication;
use Nemundo\Iso\Content\Country\CountryContentType;
use Nemundo\Iso\Data\IsoModelCollection;
use Nemundo\Iso\Job\IsoImportJob;
use Nemundo\Iso\Script\IsoImportScript;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Project\Install\AbstractInstall;

class IsoInstall extends AbstractInstall
{
    public function install()
    {

        (new ApplicationSetup())
            ->addApplication(new IsoApplication());

        (new ModelCollectionSetup())
            ->addCollection(new IsoModelCollection());

        (new ContentTypeSetup())
        ->addContentType(new CountryContentType());


        (new ScriptSetup())
            ->addScript(new IsoImportScript());

        /*(new JobSetup())
            ->addJob(new IsoImportJob());*/

    }
}