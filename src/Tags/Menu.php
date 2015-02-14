<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Menu extends ContentAbstract
{
  const TYPE_POPUP = 'popup';
  const TYPE_TOOLBAR = 'toolbar';
  const TYPE_CONTEXT = 'context';

  protected $_tag = 'menu';

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
