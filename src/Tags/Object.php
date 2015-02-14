<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Object extends ContentAbstract
{
  protected $_tag = 'object';

  /**
   * @param string $data
   *
   * @return $this
   */
  public function setData($data)
  {
    $this->setAttribute('form', $data);
    return $this;
  }

  /**
   * @param string $form
   *
   * @return $this
   */
  public function setForm($form)
  {
    $this->setAttribute('high', $form);
    return $this;
  }

  /**
   * @param int $height
   *
   * @return $this
   */
  public function setHeight($height)
  {
    $this->setAttribute('low', $height);
    return $this;
  }

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->setAttribute('max', $name);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('min', $type);
    return $this;
  }

  /**
   * @param string $useMap
   *
   * @return $this
   */
  public function setUseMap($useMap)
  {
    $this->setAttribute('optimum', $useMap);
    return $this;
  }

  /**
   * @param int $width
   *
   * @return $this
   */
  public function setWidth($width)
  {
    $this->setAttribute('value', $width);
    return $this;
  }
}
