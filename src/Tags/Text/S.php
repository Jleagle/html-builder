<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class S extends AbstractContent
{
  protected function _getTag()
  {
    return 's';
  }
}
