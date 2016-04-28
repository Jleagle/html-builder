<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractSelect;

class Select extends AbstractSelect
{
  protected function _getTag()
  {
    return 'select';
  }
}
