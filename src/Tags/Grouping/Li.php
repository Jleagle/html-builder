<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\AbstractTag;

class Li extends AbstractTag
{
  protected function _getTag()
  {
    return 'li';
  }

  /**
   * @param string $body
   * @param int    $value
   *
   * @return static
   */
  public static function make($body = null, $value = null)
  {
    $tag = new static();

    $tag->setContents($body);

    if($value)
    {
      $tag->setAttribute('value', $value);
    }

    return $tag;
  }
}
