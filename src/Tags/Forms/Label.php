<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\AbstractTag;

class Label extends AbstractTag
{
  protected function _getTag()
  {
    return 'label';
  }

  /**
   * @param string $label
   * @param string $for
   * @param string $form
   *
   * @return static
   */
  public static function make($label, $for = null, $form = null)
  {
    $tag = new static;
    $tag->setContents($label);
    $tag->setFor($for);
    $tag->setForm($form);
    return $tag;
  }

  /**
   * @param string $for
   *
   * @return $this
   */
  public function setFor($for)
  {
    $this->setAttribute('for', $for);
    return $this;
  }

  /**
   * @param string $form
   *
   * @return $this
   */
  public function setForm($form)
  {
    $this->setAttribute('form', $form);
    return $this;
  }
}
