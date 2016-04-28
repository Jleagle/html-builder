<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Aside extends AbstractContent
{
  protected function _getTag()
  {
    return 'aside';
  }
}
