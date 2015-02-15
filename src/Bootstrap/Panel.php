<?php
namespace Jleagle\HtmlBuilder\Bootstrap;

use Jleagle\HtmlBuilder\Tags\Div;

class Panel extends Div
{
  private $_header;
  private $_footer;

  public function __construct($content, $header = null, $footer = null)
  {
    $this->_header = $header;
    $this->_footer = $footer;
    $this->setContent($content);
    $this->addClass('panel panel-default');
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
