<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Frameset extends AbstractContent
{
  protected function _getTag()
  {
    return 'frameset';
  }

  /**
   * @param Frame $frame
   *
   * @return $this
   */
  public function addFrame(Frame $frame)
  {
    $this->appendContents($frame);
    return $this;
  }

  /**
   * @param Frame[] $frames
   *
   * @return $this
   */
  public function addFrames(array $frames)
  {
    foreach($frames as $frame)
    {
      $this->addFrame($frame);
    }
    return $this;
  }
}
