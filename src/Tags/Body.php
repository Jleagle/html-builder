<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Body extends AbstractContent
{
  protected function _getTag()
  {
    return 'body';
  }
}
