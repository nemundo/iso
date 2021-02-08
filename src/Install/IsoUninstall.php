<?php

namespace Nemundo\Iso\Install;

use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Content\Setup\ContentTypeSetup;
use Nemundo\Iso\Content\Country\CountryContentType;
use Nemundo\Iso\Data\IsoModelCollection;
use Nemundo\Iso\Script\IsoImportScript;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Project\Install\AbstractUninstall;

class IsoUninstall extends AbstractUninstall
{

    public function uninstall()
    {

        (new ContentTypeSetup())
            ->removeContentType(new CountryContentType());

        (new ScriptSetup())
            ->removeScript(new IsoImportScript());

        (new ModelCollectionSetup())
            ->removeCollection(new IsoModelCollection());

        /*(new JobSetup())
            ->addJob(new IsoImportJob());*/

    }

}