<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\Tag;

class BlockQuote extends Tag
{
  protected $_tag = 'blockquote';

  /**
   * @param        $content
   * @param string $cite
   */
  public function __construct($content, $cite = null)
  {
    $this->setContent($content);
    if($cite)
    {
      $this->setCite($cite);
    }
  }

  /**
   * @param string $source
   *
   * @return $this
   */
  public function setCite($source)
  {
    $this->setAttribute('cite', $source);
    return $this;
  }
}
