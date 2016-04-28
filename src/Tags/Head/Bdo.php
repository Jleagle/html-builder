<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\AbstractTag;

class Bdo extends AbstractTag
{
  const DIRECTION_LEFT_TO_RIGHT = 'ltr';
  const DIRECTION_RIGHT_TO_LEFT = 'rtl';

  protected function _getTag()
  {
    return 'bdo';
  }

  /**
   * @param        $content
   * @param string $direction
   *
   * @return static
   */
  public static function make($content, $direction)
  {
    $tag = new static();
    $tag->setContents($content);
    $tag->setDirection($direction);
    return $tag;
  }

  /**
   * @param $direction
   *
   * @return $this
   */
  public function setDirection($direction)
  {
    $this->setAttribute('dir', $direction);
    return $this;
  }
}
