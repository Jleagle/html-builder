<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Samp extends AbstractContent
{
  protected function _getTag()
  {
    return 'samp';
  }
}
