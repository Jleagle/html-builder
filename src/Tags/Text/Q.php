<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Q extends AbstractContent
{
  protected function _getTag()
  {
    return 'q';
  }

  /**
   * @param string $cite
   *
   * @return $this
   */
  public function setCite($cite)
  {
    $this->setAttribute('cite', $cite);
    return $this;
  }
}
