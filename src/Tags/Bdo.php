<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tag;

class Bdo extends Tag
{
  const DIRECTION_LEFT_TO_RIGHT = 'ltr';
  const DIRECTION_RIGHT_TO_LEFT = 'rtl';

  protected $_tag = 'bdo';

  /**
   * @param        $content
   * @param string $direction
   */
  public function __construct($content, $direction)
  {
    $this->setContent($content);
    $this->setDirection($direction);
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
