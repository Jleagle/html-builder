<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Embed extends ContentAbstract
{
  protected $_tag = 'embed';

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
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
    return $this;
  }
}
