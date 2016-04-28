<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Tr extends AbstractContent
{
  protected function _getTag()
  {
    return 'tr';
  }
}
