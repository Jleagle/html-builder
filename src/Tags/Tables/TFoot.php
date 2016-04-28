<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class TFoot extends AbstractContent
{
  protected function _getTag()
  {
    return 'tfoot';
  }
}
