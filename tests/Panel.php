<?php
namespace Jleagle\HtmlBuilder\Bootstrap;

use Jleagle\HtmlBuilder\Tags\Grouping\Div;

class Panel extends Div
{
  private $_header;
  private $_footer;

  public static function make($content, $header = null, $footer = null)
  {
    $tag = new static;
    $tag->_header = $header;
    $tag->_footer = $footer;
    $tag->setContents($content);
    $tag->addClass('panel panel-default');
    return $tag;
  }

  public function _getContentForRender()
  {
    $header = null;
    $footer = null;

    $content = [];
    if($this->_header)
    {
      $header = new Div($this->_header, ['class' => 'panel-heading']);
      $content[] = $header;
    }
    $content[] = new Div($this->getContent(), ['class' => 'panel-body']);
    if($this->_footer)
    {
      $footer = new Div($this->_footer, ['class' => 'panel-footer']);
      $content[] = $footer;
    }
    return $content;
  }
}
