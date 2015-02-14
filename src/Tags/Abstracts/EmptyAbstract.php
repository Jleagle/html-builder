<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\Tag;

abstract class EmptyAbstract extends Tag
{
  /**
   * @param string[] $attributes
   */
  public function __construct($attributes = [])
  {
    $this->setAttributes($attributes);
  }
}
