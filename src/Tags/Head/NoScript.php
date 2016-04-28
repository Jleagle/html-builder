<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class NoScript extends AbstractContent
{
  protected function _getTag()
  {
    return 'noscript';
  }
}
