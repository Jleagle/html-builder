<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\AbstractTag;

class Map extends AbstractTag
{
  protected function _getTag()
  {
    return 'map';
  }

  /**
   * @param string $name
   *
   * @return static
   */
  public static function make($name)
  {
    $tag = new static;
    $tag->setName($name);
    return $tag;
  }

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->setAttribute('name', $name);
    return $this;
  }

  /**
   * @param Area $area
   *
   * @return $this
   */
  public function addArea(Area $area)
  {
    $this->appendContents($area);
    return $this;
  }

  /**
   * @param Area[] $areas
   *
   * @return $this
   */
  public function addAreas(array $areas)
  {
    foreach($areas as $area)
    {
      $this->addArea($area);
    }
    return $this;
  }
}
