<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Legend extends AbstractContent
{
  protected function _getTag()
  {
    return 'legend';
  }
}
