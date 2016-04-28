<?php
namespace Jleagle\HtmlBuilder;

use phpDocumentor\Reflection\DocBlock\Tag;

class Collection
{
  protected $_tags = [];

  public static function make(...$tags)
  {
    $return = new static();

    foreach($tags as $tag)
    {
      $return->addTag($tag);
    }

    return $return;
  }

  public function addTag($tag)
  {
    $this->_tags[] = $tag;
  }

  function __toString()
  {
    $return = '';
    foreach($this->_tags as $tag)
    {
      $return .= $tag;
    }
    return $return;
  }
}
