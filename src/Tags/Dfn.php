<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\Tag;

class Dfn extends Tag
{
  protected $_tag = 'dfn';

  /**
   * @param        $content
   * @param string $title
   * @param string $id
   */
  public function __construct($content, $title = null, $id = null)
  {
    $this->setContent($content);
    if($title)
    {
      $this->setTitle($title);
    }
    if($id)
    {
      $this->setId($id);
    }
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
