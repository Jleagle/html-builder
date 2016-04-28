<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\AbstractTag;

class BlockQuote extends AbstractTag
{
  protected function _getTag()
  {
    return 'blockquote';
  }

  /**
   * @param        $content
   * @param string $cite
   *
   * @return static
   */
  public static function make($content, $cite = null)
  {
    $tag = new static;
    $tag->setContents($content);
    if($cite)
    {
      $tag->setCite($cite);
    }
    return $tag;
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
