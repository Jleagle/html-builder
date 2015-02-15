<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\Tag;

class Img extends Tag
{
  protected $_tag = 'img';

  /**
   * @param string $source
   * @param string $alt
   */
  public function __construct($source, $alt = null)
  {
    $this->setSource($source);
    if($alt)
    {
      $this->setAlt($alt);
    }
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
