<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Address extends AbstractContent
{
  protected function _getTag()
  {
    return 'address';
  }
}
