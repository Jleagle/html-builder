<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class P extends AbstractContent
{
  protected function _getTag()
  {
    return 'p';
  }
}
