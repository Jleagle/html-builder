<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Caption extends AbstractContent
{
  protected function _getTag()
  {
    return 'caption';
  }
}
