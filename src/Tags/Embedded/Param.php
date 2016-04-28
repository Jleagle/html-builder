<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Param extends AbstractContent
{
  protected function _getTag()
  {
    return 'param';
  }

  protected function _isVoid()
  {
    return true;
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
