<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Ins extends ContentAbstract
{
  protected $_tag = 'ins';


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
   * @param string|int $dateTime
   *
   * @return $this
   */
  public function setDateTime($dateTime)
  {
    if(is_string($dateTime))
    {
      $dateTime = strtotime($dateTime);
    }
    $dateTime = date('c', $dateTime);
    $this->setAttribute('datetime', $dateTime);
    return $this;
  }
}
