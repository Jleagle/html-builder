<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Wbr extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'wbr';
  }

  protected function _isVoid()
  {
    return true;
  }
}
