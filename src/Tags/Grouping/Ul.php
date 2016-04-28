<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractList;

class Ul extends AbstractList
{
  protected function _getTag()
  {
    return 'ul';
  }
}
