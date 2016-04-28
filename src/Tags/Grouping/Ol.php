<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractList;

class Ol extends AbstractList
{
  protected function _getTag()
  {
    return 'ol';
  }
}
