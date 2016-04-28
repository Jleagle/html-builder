<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Nav extends AbstractContent
{
  protected function _getTag()
  {
    return 'nav';
  }
}
