<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Audio extends ContentAbstract
{
  const PRELOAD_AUTO = 'auto';
  const PRELOAD_METADATA = 'metadata';
  const PRELOAD_NONE = 'none';

  protected $_tag = 'audio';

  public function addSource(Source $source)
  {
    $this->appendContent($source);
    return $this;
  }

  /**
   * @param bool $autoPlay
   *
   * @return $this
   */
  public function setAutoPlay($autoPlay = true)
  {
    if($autoPlay)
    {
      $this->setAttribute('autoplay', 'autoplay');
    }
    else
    {
      $this->removeAttribute('autoplay');
    }
    return $this;
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
   * @param bool $loop
   *
   * @return $this
   */
  public function setLoop($loop = true)
  {
    if($loop)
    {
      $this->setAttribute('loop', 'loop');
    }
    else
    {
      $this->removeAttribute('loop');
    }
    return $this;
  }

  /**
   * @param bool $muted
   *
   * @return $this
   */
  public function setMuted($muted = true)
  {
    if($muted)
    {
      $this->setAttribute('muted', 'muted');
    }
    else
    {
      $this->removeAttribute('muted');
    }
    return $this;
  }

  /**
   * @param string $preload
   *
   * @return $this
   */
  public function setPreload($preload)
  {
    $this->setAttribute('preload', $preload);
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
}
