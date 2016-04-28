<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\AbstractTag;

class ColGroup extends AbstractTag
{
  protected function _getTag()
  {
    return 'colgroup';
  }

  public static function make($span = null)
  {
    $tag = new static;
    if($span)
    {
      $tag->setSpan($span);
    }
    return $tag;
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
    $this->appendContents($column);
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
