<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Del extends AbstractContent
{
  protected function _getTag()
  {
    return 'del';
  }

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
