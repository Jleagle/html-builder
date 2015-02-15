<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\Core\Tag;
use Jleagle\HtmlBuilder\Tags\Lists\ListItem;

abstract class ListAbstract extends Tag
{
  /**
   * @param ListItem[] $listItems
   * @param string[]   $attributes
   */
  public function __construct($listItems = [], $attributes = [])
  {
    $this->addListItems($listItems);
    $this->setAttributes($attributes);
  }

  /**
   * @param $listItem
   *
   * @return $this
   */
  public function addListItem($listItem)
  {
    if(!$listItem instanceof ListItem)
    {
      $listItem = new ListItem($listItem);
    }
    $this->appendContent($listItem);
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
