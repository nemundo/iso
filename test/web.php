<?php

require __DIR__.'/config.php';

$html=new \Nemundo\Html\Document\HtmlDocument();

new \Nemundo\Iso\Com\ListBox\CountryListBox($html);

$html->render();
