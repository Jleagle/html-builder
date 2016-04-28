<?php
namespace Jleagle\HtmlBuilder\Tags\Text;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Bdi extends AbstractContent
{
  protected function _getTag()
  {
    return 'bdi';
  }
}
