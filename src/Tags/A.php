<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\LinkAbstract;

class A extends LinkAbstract
{
  protected $_tag = 'a';

  /**
   * @param string $link
   * @param string $text
   */
  public function __construct($link, $text)
  {
    $this->setLink($link);
    $this->setContent($text);
  }
}
