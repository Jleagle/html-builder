<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Time extends ContentAbstract
{
  protected $_tag = 'time';

  /**
   * @param string $dateTime
   */
  public function __construct($dateTime = null)
  {
    if($dateTime)
    {
      $this->setDateTime($dateTime);
    }
  }


  /**
   * @param string $dateTime
   *
   * @return $this
   */
  public function setDateTime($dateTime)
  {
    $this->setAttribute('datetime', $dateTime);
    return $this;
  }
}
