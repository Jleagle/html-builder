<?php
namespace Jleagle\HtmlBuilder\Tags\Embedded;

use Jleagle\HtmlBuilder\AbstractTag;

class Source extends AbstractTag
{
  protected function _getTag()
  {
    return 'source';
  }

  protected function _isVoid()
  {
    return true;
  }

  public static function make($source = null, $type = null, $media = null)
  {
    $tag = new static;
    if($source)
    {
      $tag->setSource($source);
    }
    if($type)
    {
      $tag->setType($type);
    }
    if($media)
    {
      $tag->setMedia($source);
    }
    return $tag;
  }


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
