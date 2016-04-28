<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Header extends AbstractContent
{
  protected function _getTag()
  {
    return 'header';
  }
}
