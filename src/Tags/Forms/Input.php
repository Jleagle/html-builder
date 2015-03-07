<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\FormInputAbstract;

class Input extends FormInputAbstract
{
  const TYPE_BUTTON = 'button';
  const TYPE_CHECKBOX = 'checkbox';
  const TYPE_COLOR = 'color';
  const TYPE_DATE = 'date';
  const TYPE_DATETIME = 'datetime';
  const TYPE_DATETIME_LOCAL = 'datetime-local';
  const TYPE_EMAIL = 'email';
  const TYPE_FILE = 'file';
  const TYPE_HIDDEN = 'hidden';
  const TYPE_IMAGE = 'image';
  const TYPE_MONTH = 'month';
  const TYPE_NUMBER = 'number';
  const TYPE_PASSWORD = 'password';
  const TYPE_RADIO = 'radio';
  const TYPE_RANGE = 'range';
  const TYPE_RESET = 'reset';
  const TYPE_SEARCH = 'search';
  const TYPE_SUBMIT = 'submit';
  const TYPE_TEL = 'tel';
  const TYPE_TEXT = 'text';
  const TYPE_TIME = 'time';
  const TYPE_URL = 'url';
  const TYPE_WEEK = 'week';

  protected $_tag = 'input';

  public function __construct($type, $value)
  {
    $this->setType($type);
    $this->setValue($value);
  }

  /**
   * @param string $accept
   *
   * @return $this
   */
  public function setAccept($accept)
  {
    $this->setAttribute('accept', $accept);
    return $this;
  }

  /**
   * @param string $alt
   *
   * @return $this
   */
  public function setAlt($alt)
  {
    $this->setAttribute('alt', $alt);
    return $this;
  }

  /**
   * @param bool $autoComplete
   *
   * @return $this
   */
  public function setAutoComplete($autoComplete = true)
  {
    $this->setAttribute('autocomplete', $autoComplete ? 'on' : 'off');
    return $this;
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
   * @param bool $checked
   *
   * @return $this
   */
  public function setChecked($checked = true)
  {
    if($checked)
    {
      $this->setAttribute('checked', 'checked');
    }
    else
    {
      $this->removeAttribute('checked');
    }
    return $this;
  }

  /**
   * @param bool $disabled
   *
   * @return $this
   */
  public function setDisabled($disabled = true)
  {
    if($disabled)
    {
      $this->setAttribute('disabled', 'disabled');
    }
    else
    {
      $this->removeAttribute('disabled');
    }
    return $this;
  }

  /**
   * @param int $height
   *
   * @return $this
   */
  public function setHeight($height)
  {
    $this->setAttribute('height', $height);
    return $this;
  }

  /**
   * @param string $list
   *
   * @return $this
   */
  public function setList($list)
  {
    $this->setAttribute('list', $list);
    return $this;
  }

  /**
   * @param int $max
   *
   * @return $this
   */
  public function setMax($max)
  {
    $this->setAttribute('max', $max);
    return $this;
  }

  /**
   * @param int $maxLength
   *
   * @return $this
   */
  public function setMaxLength($maxLength)
  {
    $this->setAttribute('maxlength', $maxLength);
    return $this;
  }

  /**
   * @param int $min
   *
   * @return $this
   */
  public function setMin($min)
  {
    $this->setAttribute('min', $min);
    return $this;
  }

  /**
   * @param bool $multiple
   *
   * @return $this
   */
  public function setMultiple($multiple = true)
  {
    if($multiple)
    {
      $this->setAttribute('multiple', 'multiple');
    }
    else
    {
      $this->removeAttribute('multiple');
    }
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
   * @param string $pattern
   *
   * @return $this
   */
  public function setPattern($pattern)
  {
    $this->setAttribute('pattern', $pattern);
    return $this;
  }

  /**
   * @param string $placeholder
   *
   * @return $this
   */
  public function setPlaceHolder($placeholder)
  {
    $this->setAttribute('placeholder', $placeholder);
    return $this;
  }

  /**
   * @param bool $readOnly
   *
   * @return $this
   */
  public function setReadOnly($readOnly = true)
  {
    if($readOnly)
    {
      $this->setAttribute('readonly', 'readonly');
    }
    else
    {
      $this->removeAttribute('readonly');
    }
    return $this;
  }

  /**
   * @param bool $required
   *
   * @return $this
   */
  public function setRequired($required = true)
  {
    if($required)
    {
      $this->setAttribute('required', 'required');
    }
    else
    {
      $this->removeAttribute('required');
    }
    return $this;
  }

  /**
   * @param int $size
   *
   * @return $this
   */
  public function setSize($size)
  {
    $this->setAttribute('size', $size);
    return $this;
  }

  /**
   * @param string $source
   *
   * @return $this
   */
  public function setSource($source)
  {
    $this->setAttribute('src', $source);
    return $this;
  }

  /**
   * @param int $step
   *
   * @return $this
   */
  public function setStep($step)
  {
    $this->setAttribute('step', $step);
    return $this;
  }

  /**
   * @param string $accept
   *
   * @return $this
   */
  public function setType($accept)
  {
    $this->setAttribute('type', $accept);
    return $this;
  }

  /**
   * @param string $accept
   *
   * @return $this
   */
  public function setValue($accept)
  {
    $this->setAttribute('value', $accept);
    return $this;
  }

  /**
   * @param int $accept
   *
   * @return $this
   */
  public function setWidth($accept)
  {
    $this->setAttribute('width', $accept);
    return $this;
  }
}
