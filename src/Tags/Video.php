<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Video extends ContentAbstract
{
  protected $_tag = 'video';

  /**
   * @param Source $source
   *
   * @return $this
   */
  public function addSource(Source $source)
  {
    $this->appendContent($source);
    return $this;
  }

  /**
   * @param array $sources
   *
   * @return $this
   */
  public function addSources(array $sources)
  {
    foreach($sources as $source)
    {
      $this->addSource($source);
    }
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
   * @param string $poster
   *
   * @return $this
   */
  public function setPoster($poster)
  {
    $this->setAttribute('poster', $poster);
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
