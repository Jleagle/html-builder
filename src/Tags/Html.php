<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Html extends AbstractContent
{
  protected function _getTag()
  {
    return 'html';
  }

  /**
   * @param string $manifest
   *
   * @return $this
   */
  public function setManifest($manifest)
  {
    $this->setAttribute('manifest', $manifest);
    return $this;
  }

  /**
   * @param string $xmlns
   *
   * @return $this
   */
  public function setXmlns($xmlns)
  {
    $this->setAttribute('xmlns', $xmlns);
    return $this;
  }
}
