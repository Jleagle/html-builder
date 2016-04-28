<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractFormInput;

class Button extends AbstractFormInput
{
  protected function _getTag()
  {
    return 'button';
  }

  /**
   * @param string $text
   * @param string $type
   *
   * @return static
   */
  public static function make($text, $type = null)
  {
    $tag = new static();
    $tag->setContents($text);
    if($type)
    {
      $tag->setType($type);
    }
    return $tag;
  }

  /**
   * @param bool $autoFocus
   *
   * @return $this
   */
  public function setAutoFocus($autoFocus = true)
  {
    if($autoFocus)
    {
      $this->setAttribute('autofocus', 'autofocus');
    }
    else
    {
      $this->removeAttribute('autofocus');
    }
    return $this;
  }

  /**
   *
   */
  public function setDisabled()
  {
    $this->setAttribute('disabled', 'disabled');
    return $this;
  }

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->setAttribute('name', $name);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
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
