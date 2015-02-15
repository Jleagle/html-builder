<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\Core\Tag;

abstract class ContentAbstract extends Tag
{
  /**
   * @param string   $content
   * @param string[] $attributes
   */
  public function __construct($content = null, $attributes = [])
  {
    $this->setContent($content);
    $this->setAttributes($attributes);
  }
}
