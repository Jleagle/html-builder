<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Hr extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'hr';
  }

  protected function _isVoid()
  {
    return true;
  }
}
