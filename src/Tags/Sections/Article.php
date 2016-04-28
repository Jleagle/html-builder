<?php
namespace Jleagle\HtmlBuilder\Tags\Sections;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Article extends AbstractContent
{
  protected function _getTag()
  {
    return 'article';
  }
}
