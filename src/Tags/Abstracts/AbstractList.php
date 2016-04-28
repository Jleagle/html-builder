<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;
use Jleagle\HtmlBuilder\Tags\Grouping\Li;
use Jleagle\HtmlBuilder\Tags\Grouping\Ol;
use Jleagle\HtmlBuilder\Tags\Grouping\Ul;

abstract class AbstractList extends AbstractTag
{
  /**
   * @param Li[]     $listItems
   * @param string[] $attributes
   *
   * @return Ul|Ol
   */
  public static function make($listItems = [], $attributes = [])
  {
    $tag = new static();

    $tag->addListItems($listItems);
    $tag->setAttributes($attributes);

    return $tag;
  }

  /**
   * @param mixed $listItem
   * @param null  $value
   *
   * @return $this
   */
  public function addListItem($listItem, $value = null)
  {
    if(!$listItem instanceof Li)
    {
      $listItem = Li::make($listItem, $value);
    }
    $this->appendContents($listItem);
    return $this;
  }

  /**
   * @param array $listItems
   *
   * @return $this
   */
  public function addListItems(array $listItems)
  {
    foreach($listItems as $item)
    {
      $this->addListItem($item);
    }
    return $this;
  }
}
