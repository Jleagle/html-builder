<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tag;

class Dialog extends Tag
{
  protected $_tag = 'dialog';

  /**
   * @param string $content
   * @param bool   $open
   */
  public function __construct($content, $open = false)
  {
    $this->setContent($content);
    if($open)
    {
      $this->setOpen($open);
    }
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
