<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\RelAbstract;

class Link extends RelAbstract
{
  protected $_tag = 'link';

  public function __construct($rel, $href = null)
  {
    $this->setRelationship($rel);
    if ($href)
    {
      $this->setLink($href);
    }
  }

  /**
   * @param string $crossOrigin
   *
   * @return $this
   */
  public function setcrossOrigin($crossOrigin)
  {
    $this->setAttribute('crossorigin', $crossOrigin);
    return $this;
  }

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
   * @param string $sizes
   *
   * @return $this
   */
  public function setSizes($sizes)
  {
    $this->setAttribute('sizes', $sizes);
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
