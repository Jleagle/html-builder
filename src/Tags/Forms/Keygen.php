<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Keygen extends AbstractContent
{
  const TYPE_RSA = 'rsa';
  const TYPE_DSA = 'dsa';
  const TYPE_EC = 'ec';

  protected function _getTag()
  {
    return 'keygen';
  }

  protected function _isVoid()
  {
    return true;
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
   * @param bool $challenge
   *
   * @return $this
   */
  public function setChallenge($challenge = true)
  {
    if($challenge)
    {
      $this->setAttribute('challenge', 'challenge');
    }
    else
    {
      $this->removeAttribute('challenge');
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
   * @param string $keyType
   *
   * @return $this
   */
  public function setKeyType($keyType)
  {
    $this->setAttribute('keytype', $keyType);
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
}
