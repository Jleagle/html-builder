<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tag;

class DataList extends Tag
{
  protected $_tag = 'datalist';

  /**
   * @param string   $id
   * @param string[] $options
   */
  public function __construct($id, array $options = [])
  {
    $this->setId($id);
    $this->addOptions($options);
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
   * @param string $value
   *
   * @return $this
   */
  public function addOption($value)
  {
    $option = new Option($value);
    $option->setFlag(Tag::FLAG_OPENING);
    $this->appendContent($option);
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
