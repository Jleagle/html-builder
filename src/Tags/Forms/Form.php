<?php
namespace Jleagle\HtmlBuilder\Tags\Forms;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Form extends ContentAbstract
{
  const FORM_METHOD_GET = 'get';
  const FORM_METHOD_POST = 'post';

  const ENCODE_TYPE_ENCODED = 'application/x-www-form-urlencoded';
  const ENCODE_TYPE_MULTIPART = 'multipart/form-data';
  const ENCODE_TYPE_TEXT = 'text/plain';

  protected $_tag = 'form';

  /**
   * @param string $characterSet
   *
   * @return $this
   */
  public function setAcceptCharset($characterSet)
  {
    $this->setAttribute('accept-charset', $characterSet);
    return $this;
  }

  /**
   * @param string $action
   *
   * @return $this
   */
  public function setAction($action)
  {
    $this->setAttribute('action', $action);
    return $this;
  }

  /**
   * @param bool $autoComplete
   *
   * @return $this
   */
  public function setAutoComplete($autoComplete)
  {
    $this->setAttribute('autocomplete', $autoComplete ? 'on' : 'off');
    return $this;
  }

  /**
   * @param string $encodeType
   *
   * @return $this
   */
  public function setEncodeType($encodeType)
  {
    $this->setAttribute('enctype', $encodeType);
    return $this;
  }

  /**
   * @param string $method
   *
   * @return $this
   */
  public function setMethod($method)
  {
    $this->setAttribute('method', $method);
    return $this;
  }

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->setAttribute('name', $name);
    return $this;
  }

  /**
   * @param bool $noValidate
   *
   * @return $this
   */
  public function setNoValidate($noValidate)
  {
    if($noValidate)
    {
      $this->setAttribute('novalidate', $noValidate);
    }
    else
    {
      $this->removeAttribute('novalidate');
    }
    return $this;
  }

  /**
   * @param string $target
   *
   * @return $this
   */
  public function setTarget($target)
  {
    $this->setAttribute('target', $target);
    return $this;
  }
}
