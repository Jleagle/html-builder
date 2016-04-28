<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class B extends AbstractContent
{
  protected function _getTag()
  {
    return 'b';
  }
}
