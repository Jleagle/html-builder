<?php
namespace Jleagle\HtmlBuilder\Tags\Interactive;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Menu extends AbstractContent
{
  const TYPE_POPUP = 'popup';
  const TYPE_TOOLBAR = 'toolbar';
  const TYPE_CONTEXT = 'context';

  protected function _getTag()
  {
    return 'menu';
  }

  /**
   * @param string $label
   *
   * @return $this
   */
  public function setLabel($label)
  {
    $this->setAttribute('label', $label);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
    return $this;
  }
}
