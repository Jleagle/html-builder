<?php
namespace Jleagle\HtmlBuilder\Tags\Lists;

use Jleagle\HtmlBuilder\Tag;

class ListItem extends Tag
{
  protected $_tag = 'li';

  /**
   * @param string $content
   * @param int    $value
   */
  public function __construct($content, $value = null)
  {
    $this->setContent($content);

    if($value)
    {
      $this->setAttribute('value', $value);
    }
  }
}
