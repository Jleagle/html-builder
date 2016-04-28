<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Head extends AbstractContent
{
  protected function _getTag()
  {
    return 'head';
  }
}
