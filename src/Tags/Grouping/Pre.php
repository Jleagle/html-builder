<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Pre extends AbstractContent
{
  protected function _getTag()
  {
    return 'pre';
  }
}
