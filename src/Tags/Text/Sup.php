<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Sup extends AbstractContent
{
  protected function _getTag()
  {
    return 'sup';
  }
}
