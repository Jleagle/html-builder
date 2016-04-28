<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\Exceptions\HtmlBuilderExcepton;
use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractLink;

class Area extends AbstractLink
{
  const SHAPE_DEFAULT = 'default';
  const SHAPE_RECTANGLE = 'rect';
  const SHAPE_CIRCLE = 'circle';
  const SHAPE_POLYGON = 'poly';

  protected function _getTag()
  {
    return 'area';
  }

  protected function _isVoid()
  {
    return true;
  }

  /**
   * @param string   $link
   * @param string[] $attributes
   *
   * @return static
   */
  public static function make($link, $attributes = [])
  {
    $tag = new static;
    $tag->setLink($link);
    return $tag;
  }

  protected function _preRender()
  {
    if($this->getAttribute('href') && !$this->getAttribute('alt'))
    {
      throw new HtmlBuilderExcepton(
        'If area tag is a link, alt attribute must be set'
      );
    }
    return $this;
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
   * @param string|array $coordinates
   *
   * @return $this
   */
  public function setCoordinates($coordinates)
  {
    if(is_array($coordinates))
    {
      $coordinates = implode(',', $coordinates);
    }
    $this->setAttribute('coords', $coordinates);
    return $this;
  }

  /**
   * @param string $shape
   *
   * @return $this
   */
  public function setShape($shape)
  {
    $this->setAttribute('shape', $shape);
    return $this;
  }
}
