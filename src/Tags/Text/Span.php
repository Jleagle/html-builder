<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Span extends AbstractContent
{
  protected function _getTag()
  {
    return 'span';
  }
}
