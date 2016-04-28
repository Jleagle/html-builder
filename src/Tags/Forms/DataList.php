<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\AbstractTag;

class DataList extends AbstractTag
{
  protected function _getTag()
  {
    return 'datalist';
  }

  /**
   * @param string   $id
   * @param string[] $options
   *
   * @return static
   */
  public static function make($id, array $options = [])
  {
    $tag = new static;
    $tag->setId($id);
    $tag->addOptions($options);
    return $tag;
  }

  /**
   * @param string $id
   *
   * @return $this
   */
  public function setId($id)
  {
    $this->setAttribute('id', $id);
    return $this;
  }

  /**
   * @param Option|string $option
   *
   * @return $this
   */
  public function addOption($option)
  {
    if(!$option instanceof Option)
    {
      $option = Option::make($option);
    }

    $this->appendContents($option);
    return $this;
  }

  /**
   * @param string[] $options
   *
   * @return $this
   */
  public function addOptions(array $options)
  {
    foreach($options as $option)
    {
      $this->addOption($option);
    }
    return $this;
  }
}
