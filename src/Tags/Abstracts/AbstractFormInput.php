<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;

abstract class AbstractFormInput extends AbstractTag
{
  /**
   * @param string $formId
   *
   * @return $this
   */
  public function setForm($formId)
  {
    $this->setAttribute('form', $formId);
    return $this;
  }

  /**
   * @param string $link
   *
   * @return $this
   */
  public function setFormAction($link)
  {
    $this->setAttribute('formaction', $link);
    return $this;
  }

  /**
   * @param string $encodeType
   *
   * @return $this
   */
  public function setFormEncodeType($encodeType)
  {
    $this->setAttribute('formenctype', $encodeType);
    return $this;
  }

  /**
   * @param string $method
   *
   * @return $this
   */
  public function setFormMethod($method)
  {
    $this->setAttribute('formmethod', $method);
    return $this;
  }

  /**
   * @return $this
   */
  public function setFormNoValidate()
  {
    $this->setAttribute('formnovalidate', 'formnovalidate');
    return $this;
  }

  /**
   * @param string $target
   *
   * @return $this
   */
  public function setFormTarget($target)
  {
    $this->setAttribute('formtarget', $target);
    return $this;
  }
}
