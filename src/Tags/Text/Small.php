<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Small extends AbstractContent
{
  protected function _getTag()
  {
    return 'small';
  }
}
