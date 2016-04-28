<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\AbstractTag;

class Img extends AbstractTag
{
  protected function _getTag()
  {
    return 'img';
  }

  protected function _isVoid()
  {
    return true;
  }

  /**
   * @param string $source
   * @param string $alt
   *
   * @return static
   */
  public static function make($source, $alt = null)
  {
    $tag = new static;
    $tag->setSource($source);
    if($alt)
    {
      $tag->setAlt($alt);
    }
    return $tag;
  }

  /**
   * @param string $alt
   *
   * @return $this
   */
  public function setAlt($alt)
  {
    $this->setAttribute('alt', $alt);
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
   * @param string $crossOrigin
   *
   * @return $this
   */
  public function setcrossOrigin($crossOrigin)
  {
    $this->setAttribute('crossorigin', $crossOrigin);
    return $this;
  }

  /**
   * @param string $isMap
   *
   * @return $this
   */
  public function setIsMap($isMap)
  {
    $this->setAttribute('ismap', $isMap);
    return $this;
  }

  /**
   * @param string $useMap
   *
   * @return $this
   */
  public function setUseMap($useMap)
  {
    $this->setAttribute('usemap', $useMap);
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
}
