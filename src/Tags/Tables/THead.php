<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class THead extends AbstractContent
{
  protected function _getTag()
  {
    return 'thead';
  }
}
