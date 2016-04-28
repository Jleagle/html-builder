<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Dd extends AbstractContent
{
  protected function _getTag()
  {
    return 'dd';
  }
}
