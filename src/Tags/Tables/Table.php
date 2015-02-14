<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tag;

class Table extends Tag
{
  protected $_tag = 'table';

  public function __construct($sortable = false)
  {
    $this->setSortable($sortable);
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
