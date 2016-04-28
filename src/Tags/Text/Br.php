<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Br extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'br';
  }

  protected function _isVoid()
  {
    return true;
  }
}
