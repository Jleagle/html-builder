<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\Tag;

class Canvas extends Tag
{
  protected $_tag = 'canvas';

  /**
   * @param $content
   */
  public function __construct($content)
  {
    $this->setContent($content);
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
