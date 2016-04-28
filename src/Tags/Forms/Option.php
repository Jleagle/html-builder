<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\AbstractTag;

class Option extends AbstractTag
{
  protected function _getTag()
  {
    return 'option';
  }

  /**
   * @param string $value
   * @param string $text
   *
   * @return void|static
   */
  public static function make($value, $text = null)
  {
    $tag = new static();
    $tag->setValue($value);
    if($text)
    {
      $tag->setContents($text);
    }
    return $tag;
  }

  /**
   * @return $this
   */
  public function setDisabled()
  {
    $this->setAttribute('disabled', 'disabled');
    return $this;
  }

  /**
   * @param string $label
   *
   * @return $this
   */
  public function setLabel($label)
  {
    $this->setAttribute('label', $label);
    return $this;
  }

  /**
   * @return $this
   */
  public function setSelected()
  {
    $this->setAttribute('selected', 'selected');
    return $this;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setValue($value)
  {
    $this->setAttribute('value', $value);
    return $this;
  }
}
