<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;

abstract class AbstractContent extends AbstractTag
{
  /**
   * @param string   $content
   * @param string[] $attributes
   *
   * @return static
   */
  public static function make($content = null, $attributes = [])
  {
    $tag = new static();
    $tag->setContents($content);
    $tag->setAttributes($attributes);
    return $tag;
  }
}
