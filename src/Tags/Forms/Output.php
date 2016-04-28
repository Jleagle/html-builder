<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Output extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'output';
  }

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
