<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Ruby extends AbstractContent
{
  protected function _getTag()
  {
    return 'ruby';
  }
}
