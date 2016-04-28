<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\AbstractTag;

class Canvas extends AbstractTag
{
  protected function _getTag()
  {
    return 'canvas';
  }

  /**
   * @param $content
   *
   * @return static
   */
  public static function make($content)
  {
    $tag = new static;
    $tag->setContents($content);
    return $tag;
  }

  /**
   * @param int $width
   *
   * @return $this
   */
  public function setWidth($width)
  {
    $this->setAttribute('width', $width);
    return $this;
  }

  /**
   * @param int $height
   *
   * @return $this
   */
  public function setHeight($height)
  {
    $this->setAttribute('height', $height);
    return $this;
  }
}
