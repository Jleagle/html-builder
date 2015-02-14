<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Del extends ContentAbstract
{
  protected $_tag = 'del';

  /**
   * @param string $cite
   *
   * @return $this
   */
  public function setCite($cite)
  {
    $this->setAttribute('cite', $cite);
    return $this;
  }

  /**
   * @param string|int $time
   *
   * @return $this
   */
  public function setDateTime($time)
  {
    if(is_string($time))
    {
      $time = strtotime($time);
    }
    $time = date('c', $time);
    $this->setAttribute('datetime', $time);
    return $this;
  }
}
