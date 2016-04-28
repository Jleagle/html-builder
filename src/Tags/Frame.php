<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Frame extends AbstractContent
{
  protected function _getTag()
  {
    return 'frame';
  }

  protected function _isVoid()
  {
    return true;
  }
}
