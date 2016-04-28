<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\AbstractTag;

class Abbr extends AbstractTag
{
  protected function _getTag()
  {
    return 'abbr';
  }

  /**
   * @param        $content
   * @param string $title
   *
   * @return static
   */
  public static function make($content, $title = null)
  {
    $tag = new static();
    $tag->setContents($content);
    if($title)
    {
      $tag->setTitle($title);
    }
    return $tag;
  }

  /**
   * @param string $title
   *
   * @return $this
   */
  public function setTitle($title)
  {
    $this->setAttribute('title', $title);
    return $this;
  }
}
