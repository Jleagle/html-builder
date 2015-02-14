<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\EmptyAbstract;

class Source extends EmptyAbstract
{
  protected $_tag = 'source';

  /**
   * @param bool $controls
   *
   * @return $this
   */
  public function setControls($controls = true)
  {
    if($controls)
    {
      $this->setAttribute('controls', 'controls');
    }
    else
    {
      $this->removeAttribute('controls');
    }
    return $this;
  }

  /**
   * @param string $media
   *
   * @return $this
   */
  public function setMedia($media)
  {
    $this->setAttribute('media', $media);
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
