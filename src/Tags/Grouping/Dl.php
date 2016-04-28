<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Dl extends AbstractContent
{
  protected function _getTag()
  {
    return 'dl';
  }
}
