<?php


namespace Nemundo\Iso\Job;


use Nemundo\Content\App\Job\Type\AbstractJob;
use Nemundo\Iso\Script\IsoImportScript;

class IsoImportJob extends AbstractJob
{

    protected function loadJob()
    {
        $this->job = 'Iso Import';
    }


    public function run()
    {

        (new IsoImportScript())->run();

    }

}