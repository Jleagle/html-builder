<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\Tag;

class Label extends Tag
{
  protected $_tag = 'label';

  /**
   * @param string $label
   * @param string $for
   * @param string   $form
   */
  public function __construct($label, $for = null, $form = null)
  {
    $this->setContent($label);
    $this->setFor($for);
    $this->setForm($form);
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
