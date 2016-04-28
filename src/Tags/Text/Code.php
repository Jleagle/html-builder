<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Code extends AbstractContent
{
  protected function _getTag()
  {
    return 'code';
  }
}
