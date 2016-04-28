<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Div extends AbstractContent
{
  protected function _getTag()
  {
    return 'div';
  }
}
