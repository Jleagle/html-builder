<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\EmptyAbstract;

class Progress extends EmptyAbstract
{
  protected $_tag = 'progress';

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
