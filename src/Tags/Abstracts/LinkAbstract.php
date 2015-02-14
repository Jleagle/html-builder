<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

abstract class LinkAbstract extends RelAbstract
{
  /**
   * @param string $link
   *
   * @return $this
   */
  public function setLink($link)
  {
    $this->setAttribute('href', $link);
    return $this;
  }

  /**
   * @param string $language
   *
   * @return $this
   */
  public function setLinkLang($language)
  {
    $this->setAttribute('hreflang', $language);
    return $this;
  }

  /**
   * @param string $target
   *
   * @return $this
   */
  public function setTarget($target)
  {
    $this->setAttribute('target', $target);
    return $this;
  }

  /**
   * @param string $download
   *
   * @return $this
   */
  public function setDownload($download)
  {
    $this->setAttribute('download', $download);
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
