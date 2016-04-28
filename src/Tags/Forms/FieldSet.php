<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class FieldSet extends AbstractContent
{
  protected function _getTag()
  {
    return 'fieldset';
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
