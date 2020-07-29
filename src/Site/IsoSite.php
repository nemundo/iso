<?php
namespace Nemundo\Iso\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Iso\Page\IsoPage;
class IsoSite extends AbstractSite {
protected function loadSite() {
$this->title = 'Iso';
$this->url = 'iso';
}
public function loadContent() {
(new IsoPage())->render();
}
}