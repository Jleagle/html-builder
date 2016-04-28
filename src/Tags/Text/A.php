<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractLink;

class A extends AbstractLink
{
  protected function _getTag()
  {
    return 'a';
  }

  /**
   * @param string $link
   * @param string $text
   *
   * @return static
   */
  public static function make($link, $text)
  {
    $tag = new static();
    $tag->setLink($link);
    $tag->setContents($text);
    return $tag;
  }
}
