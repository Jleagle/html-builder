<?php
namespace Jleagle\HtmlBuilder\Tags\Headings;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;
use Jleagle\HtmlBuilder\Tags\Abstracts\HeadingAbstract;

class HGroup extends ContentAbstract
{
  protected $_tag = 'hgroup';

  /**
   * @param $heading
   *
   * @return $this
   */
  public function addHeading(HeadingAbstract $heading)
  {
    $this->appendContent($heading);
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
