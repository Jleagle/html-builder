<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Core\Tag;

class ColGroup extends Tag
{
  protected $_tag = 'colgroup';

  public function __construct($span = null)
  {
    if($span)
    {
      $this->setSpan($span);
    }
  }

  /**
   * @param string $span
   */
  public function setSpan($span)
  {
    $this->setAttribute('span', $span);
  }

  /**
   * @param Col $column
   *
   * @return $this
   */
  public function addColumn(Col $column)
  {
    $this->appendContent($column);
    return $this;
  }

  /**
   * @param Col[] $columns
   *
   * @return $this
   */
  public function addColumns(array $columns)
  {
    foreach($columns as $column)
    {
      $this->addColumn($column);
    }
    return $this;
  }
}
