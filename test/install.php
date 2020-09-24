<?php

use Nemundo\App\Script\Install\ScriptInstall;

//require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/config.php';




(new \Nemundo\Db\Provider\MySql\Database\MySqlDatabase())->createDatabase();

(new ScriptInstall())->install();

(new \Nemundo\Iso\Install\IsoInstall())->install();
(new \Nemundo\Iso\Script\IsoImportScript())->run();


