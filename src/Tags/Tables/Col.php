<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\AbstractTag;

class Col extends AbstractTag
{
  protected function _getTag()
  {
    return 'col';
  }

  protected function _isVoid()
  {
    return true;
  }

  public static function make($span = null)
  {
    $tag = new static;
    if($span)
    {
      $tag->setSpan($span);
    }
    return $tag;
  }

  /**
   * @param string $span
   */
  public function setSpan($span)
  {
    $this->setAttribute('span', $span);
  }
}
