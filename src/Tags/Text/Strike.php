<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Strike extends AbstractContent
{
  protected function _getTag()
  {
    return 'strike';
  }
}
