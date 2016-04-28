<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Figure extends AbstractContent
{
  protected function _getTag()
  {
    return 'figure';
  }
}
