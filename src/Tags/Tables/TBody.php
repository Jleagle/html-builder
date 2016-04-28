<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class TBody extends AbstractContent
{
  protected function _getTag()
  {
    return 'tbody';
  }
}
