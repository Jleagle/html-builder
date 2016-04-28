<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Section extends AbstractContent
{
  protected function _getTag()
  {
    return 'section';
  }
}
