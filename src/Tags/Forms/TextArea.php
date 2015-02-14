<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class TextArea extends ContentAbstract
{
  const WRAP_HARD = 'hard';
  const WRAP_SOFT = 'soft';

  protected $_tag = 'textarea';

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
   * @param int $cols
   *
   * @return $this
   */
  public function setCols($cols)
  {
    $this->setAttribute('cols', $cols);
    return $this;
  }

  /**
   * @param int $rows
   *
   * @return $this
   */
  public function setRows($rows)
  {
    $this->setAttribute('rows', $rows);
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
   * @param string $form
   *
   * @return $this
   */
  public function setForm($form)
  {
    $this->setAttribute('form', $form);
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
   * @param string $wrap
   *
   * @return $this
   */
  public function setWrap($wrap)
  {
    $this->setAttribute('wrap', $wrap);
    return $this;
  }
}
