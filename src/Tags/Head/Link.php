<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractRel;

class Link extends AbstractRel
{
  protected function _getTag()
  {
    return 'link';
  }

  protected function _isVoid()
  {
    return true;
  }

  /**
   * @param string $rel
   * @param string $href
   *
   * @return static
   */
  public static function make($rel, $href = null)
  {
    $tag = new static();
    $tag->setRelationship($rel);
    if($href)
    {
      $tag->setLink($href);
    }
    return $tag;
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
