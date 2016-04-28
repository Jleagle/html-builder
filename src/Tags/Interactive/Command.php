<?php
namespace Jleagle\HtmlBuilder\Tags\Interactive;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Command extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'command';
  }

  protected function _isVoid()
  {
    return true;
  }
}
