<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class U extends AbstractContent
{
  protected function _getTag()
  {
    return 'u';
  }
}
