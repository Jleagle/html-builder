<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class BaseFont extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'basefont';
  }

  protected function _isVoid()
  {
    return true;
  }
}
