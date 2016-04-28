<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Base extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'base';
  }

  protected function _isVoid()
  {
    return true;
  }

  /**
   * @param string $link
   */
  public function setLink($link)
  {
    $this->setAttribute('href', $link);
  }

  /**
   * @param string $target
   */
  public function setTarget($target)
  {
    $this->setAttribute('target', $target);
  }
}
