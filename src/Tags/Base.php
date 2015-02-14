<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\EmptyAbstract;

class Base extends EmptyAbstract
{
  protected $_tag = 'base';

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
