<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Time extends AbstractContent
{
  protected function _getTag()
  {
    return 'time';
  }

  /**
   * @param string $dateTime
   *
   * @return static
   */
  public static function make($dateTime = null)
  {
    $tag = new static();
    if($dateTime)
    {
      $tag->setDateTime($dateTime);
    }
    return $tag;
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
