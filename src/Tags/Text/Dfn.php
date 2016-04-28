<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\AbstractTag;

class Dfn extends AbstractTag
{
  protected function _getTag()
  {
    return 'dfn';
  }

  /**
   * @param        $content
   * @param string $title
   * @param string $id
   *
   * @return static
   */
  public static function make($content, $title = null, $id = null)
  {
    $tag = new static();
    $tag->setContents($content);
    if($title)
    {
      $tag->setTitle($title);
    }
    if($id)
    {
      $tag->setId($id);
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

  /**
   * @param string $id
   *
   * @return $this
   */
  public function setId($id)
  {
    $this->setAttribute('id', $id);
    return $this;
  }
}
