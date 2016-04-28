<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Sub extends AbstractContent
{
  protected function _getTag()
  {
    return 'sub';
  }
}
