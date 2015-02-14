<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Label extends ContentAbstract
{
  protected $_tag = 'label';

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
