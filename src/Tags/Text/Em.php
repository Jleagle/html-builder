<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Em extends AbstractContent
{
  protected function _getTag()
  {
    return 'em';
  }
}
