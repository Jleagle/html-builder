<?php
namespace Jleagle\HtmlBuilder\Tags\Maps;

use Jleagle\HtmlBuilder\Core\HtmlBuilderExcepton;
use Jleagle\HtmlBuilder\Tags\Abstracts\LinkAbstract;

class Area extends LinkAbstract
{
  const SHAPE_DEFAULT = 'default';
  const SHAPE_RECTANGLE = 'rect';
  const SHAPE_CIRCLE = 'circle';
  const SHAPE_POLYGON = 'poly';

  protected $_tag = 'area';

  /**
   * @param string   $link
   * @param string[] $attributes
   */
  public function __construct($link, $attributes = [])
  {
    $this->setLink($link);
  }

  protected function checks()
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
