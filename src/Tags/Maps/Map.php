<?php
namespace Jleagle\HtmlBuilder\Tags\Maps;

use Jleagle\HtmlBuilder\Core\Tag;

class Map extends Tag
{
  protected $_tag = 'map';

  /**
   * @param string $name
   */
  public function __construct($name)
  {
    $this->setName($name);
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
    $this->appendContent($area);
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
