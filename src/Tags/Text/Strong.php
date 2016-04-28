<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Strong extends AbstractContent
{
  protected function _getTag()
  {
    return 'strong';
  }
}
