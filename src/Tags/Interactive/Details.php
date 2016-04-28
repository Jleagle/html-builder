<?php
namespace Jleagle\HtmlBuilder\Tags\Interactive;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Details extends AbstractContent
{
  protected function _getTag()
  {
    return 'details';
  }

  public function setOpen()
  {
    $this->setAttribute('open', 'open');
    return $this;
  }
}
