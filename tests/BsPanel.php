<?php
namespace Jleagle\HtmlBuilder\Bootstrap;

use Jleagle\HtmlBuilder\Tags\Grouping\Div;

class BsPanel extends Div
{
  protected $_body;
  protected $_header;
  protected $_footer;

  protected function _preRender()
  {
    parent::_preRender();
    $this->addClass('panel panel-default');
  }

  public static function make($body = null, $header = null, $footer = null)
  {
    $tag = new static();

    if($body !== null)
    {
      $tag->setBody($body);
    }
    if($header !== null)
    {
      $tag->setHeader($header);
    }
    if($footer !== null)
    {
      $tag->setFooter($footer);
    }

    return $tag;
  }

  public function getContent()
  {
    return [
      $this->_header,
      $this->_body,
      $this->_footer,
    ];
  }

  public function setBody($content)
  {
    $this->_body = Div::make($content)->addClass('panel-body');
  }

  public function setHeader($content)
  {
    $this->_header = Div::make($content)->addClass('panel-heading');
  }

  public function setFooter($content)
  {
    $this->_footer = Div::make($content)->addClass('panel-footer');
  }
}
