<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tag;

class Abbr extends Tag
{
  protected $_tag = 'abbr';

  /**
   * @param        $content
   * @param string $title
   */
  public function __construct($content, $title = null)
  {
    $this->setContent($content);
    if($title)
    {
      $this->setTitle($title);
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
}
