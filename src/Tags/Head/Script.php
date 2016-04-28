<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Script extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'script';
  }

  /**
   * @param bool $async
   *
   * @return $this
   */
  public function setAsync($async = true)
  {
    if($async)
    {
      $this->setAttribute('async', 'async');
    }
    else
    {
      $this->removeAttribute('async');
    }
    return $this;
  }

  /**
   * @param string $source
   *
   * @return $this
   */
  public function setCharSet($source)
  {
    $this->setAttribute('charset', $source);
    return $this;
  }

  /**
   * @param bool $defer
   *
   * @return $this
   */
  public function setDefer($defer = true)
  {
    if($defer)
    {
      $this->setAttribute('defer', 'defer');
    }
    else
    {
      $this->removeAttribute('defer');
    }
    return $this;
  }

  /**
   * @param string $source
   *
   * @return $this
   */
  public function setSource($source)
  {
    $this->setAttribute('src', $source);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
    return $this;
  }
}
