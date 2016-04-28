<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractSelect;

class OptGroup extends AbstractSelect
{
  protected function _getTag()
  {
    return 'optgroup';
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
   * @param string $label
   *
   * @return $this
   */
  public function setLabel($label)
  {
    $this->setAttribute('label', $label);
    return $this;
  }
}
