<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Dt extends AbstractContent
{
  protected function _getTag()
  {
    return 'dt';
  }
}
