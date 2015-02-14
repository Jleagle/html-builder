<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\EmptyAbstract;

class Output extends EmptyAbstract
{
  protected $_tag = 'output';

  /**
   * @param $direction
   *
   * @return $this
   */
  public function setFor($direction)
  {
    $this->setAttribute('dir', $direction);
    return $this;
  }

  /**
   * @param $direction
   *
   * @return $this
   */
  public function setForm($direction)
  {
    $this->setAttribute('dir', $direction);
    return $this;
  }

  /**
   * @param $direction
   *
   * @return $this
   */
  public function setName($direction)
  {
    $this->setAttribute('dir', $direction);
    return $this;
  }
}
