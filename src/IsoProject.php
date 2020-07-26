<?php


namespace Nemundo\Iso;


use Nemundo\Project\AbstractProject;

class IsoProject extends AbstractProject
{

    protected function loadProject()
    {

        $this->project = 'Iso';
        $this->projectName = 'iso';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR;


    }

}