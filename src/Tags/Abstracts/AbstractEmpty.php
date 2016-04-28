<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;

abstract class AbstractEmpty extends AbstractTag
{
  /**
   * @param string[] $attributes
   *
   * @return static
   */
  public static function make($attributes = [])
  {
    $tag = new static();
    $tag->setAttributes($attributes);
    return $tag;
  }
}
