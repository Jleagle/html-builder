<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Title extends AbstractContent
{
  protected function _getTag()
  {
    return 'title';
  }
}
