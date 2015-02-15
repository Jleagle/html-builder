<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Core\Tag;

class Option extends Tag
{
  protected $_tag = 'option';

  /**
   * @param string $value
   * @param string $text
   */
  public function __construct($value, $text = null)
  {
    $this->setValue($value);
    if($text)
    {
      $this->setContent($text);
    }
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
