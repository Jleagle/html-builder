<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Mark extends AbstractContent
{
  protected function _getTag()
  {
    return 'mark';
  }
}
