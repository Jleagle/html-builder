<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Kbd extends AbstractContent
{
  protected function _getTag()
  {
    return 'kbd';
  }
}
