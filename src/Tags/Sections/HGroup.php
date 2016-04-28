<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class HGroup extends AbstractContent
{
  protected function _getTag()
  {
    return 'hgroup';
  }

  /**
   * @param $heading
   *
   * @return $this
   */
  public function addHeading(AbstractHeading $heading)
  {
    $this->appendContents($heading);
    return $this;
  }

  /**
   * @param array $headings
   *
   * @return $this
   */
  public function addHeadings(array $headings)
  {
    foreach($headings as $header)
    {
      $this->addHeading($header);
    }
    return $this;
  }
}
