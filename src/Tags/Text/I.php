<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class I extends AbstractContent
{
  protected function _getTag()
  {
    return 'i';
  }
}
