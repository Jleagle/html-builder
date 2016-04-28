<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\AbstractTag;

class Dialog extends AbstractTag
{
  protected function _getTag()
  {
    return 'dialog';
  }

  /**
   * @param string $content
   * @param bool   $open
   *
   * @return static
   */
  public static function make($content, $open = false)
  {
    $tag = new static;
    $tag->setContents($content);
    if($open)
    {
      $tag->setOpen($open);
    }
    return $tag;
  }

  /**
   * @param bool $open
   *
   * @return $this
   */
  public function setOpen($open)
  {
    if($open)
    {
      $this->setAttribute('open');
    }
    else
    {
      $this->removeAttribute('open');
    }
    return $this;
  }
}
