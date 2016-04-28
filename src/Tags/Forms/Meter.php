<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Meter extends AbstractContent
{
  protected function _getTag()
  {
    return 'meter';
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
   * @param string $high
   *
   * @return $this
   */
  public function setHigh($high)
  {
    $this->setAttribute('high', $high);
    return $this;
  }

  /**
   * @param string $low
   *
   * @return $this
   */
  public function setLow($low)
  {
    $this->setAttribute('low', $low);
    return $this;
  }

  /**
   * @param string $max
   *
   * @return $this
   */
  public function setMax($max)
  {
    $this->setAttribute('max', $max);
    return $this;
  }

  /**
   * @param string $min
   *
   * @return $this
   */
  public function setMin($min)
  {
    $this->setAttribute('min', $min);
    return $this;
  }

  /**
   * @param string $optimum
   *
   * @return $this
   */
  public function setOptimum($optimum)
  {
    $this->setAttribute('optimum', $optimum);
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
