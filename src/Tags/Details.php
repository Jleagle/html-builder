<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Details extends ContentAbstract
{
  protected $_tag = 'details';

  public function setOpen()
  {
    $this->setAttribute('open', 'open');
    return $this;
  }
}
