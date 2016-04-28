<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Progress extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'progress';
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
   * @param int $value
   *
   * @return $this
   */
  public function setValue($value)
  {
    $this->setAttribute('value', $value);
    return $this;
  }
}
