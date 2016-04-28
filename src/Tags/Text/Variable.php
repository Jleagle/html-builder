<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Variable extends AbstractContent
{
  protected function _getTag()
  {
    return 'var';
  }
}
