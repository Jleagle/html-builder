<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Core\Tag;

class Col extends Tag
{
  protected $_tag = 'col';

  public function __construct($span = null)
  {
    if($span)
    {
      $this->setSpan($span);
    }
  }

  /**
   * @param string $span
   */
  public function setSpan($span)
  {
    $this->setAttribute('span', $span);
  }
}
