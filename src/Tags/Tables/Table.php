<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\AbstractTag;

class Table extends AbstractTag
{
  protected function _getTag()
  {
    return 'table';
  }

  public static function make($sortable = false)
  {
    $tag = new static;
    $tag->setSortable($sortable);
    return $tag;
  }

  /**
   * @param bool $sortable
   *
   * @return $this
   */
  public function setSortable($sortable = true)
  {
    if($sortable)
    {
      $this->setAttribute('sortable', 'sortable');
    }
    else
    {
      $this->removeAttribute('sortable');
    }
    return $this;
  }
}
