<?php
namespace Jleagle\HtmlBuilder\Tags\Interactive;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Summary extends AbstractContent
{
  protected function _getTag()
  {
    return 'summary';
  }
}
