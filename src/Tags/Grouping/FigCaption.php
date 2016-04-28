<?php
namespace Jleagle\HtmlBuilder\Tags\Grouping;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class FigCaption extends AbstractContent
{
  protected function _getTag()
  {
    return 'figcaption';
  }
}
