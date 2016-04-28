<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Cite extends AbstractContent
{
  protected function _getTag()
  {
    return 'cite';
  }
}
