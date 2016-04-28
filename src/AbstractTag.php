<?php
namespace Jleagle\HtmlBuilder;

use Jleagle\HtmlBuilder\Exceptions\HtmlBuilderInvalidTagException;
use Jleagle\HtmlBuilder\Exceptions\HtmlBuilderVoidTagException;

abstract class AbstractTag
{
  const TARGET_BLANK = '_blank';
  const TARGET_SELF = '_self';
  const TARGET_PARENT = '_parent';
  const TARGET_TOP = '_top';

  protected $_attributes = [];
  protected $_contents = [];

  /**
   * @return bool
   */
  abstract protected function _getTag();

  final protected function __construct()
  {
  }

  /**
   * Default
   *
   * @return bool
   */
  protected function _isVoid()
  {
    return false;
  }

  /**
   * @return static
   */
  public static function make()
  {
    return new static();
  }

  /**
   * @param $contents
   *
   * @return $this
   */
  public function appendContents($contents)
  {
    if(is_array($contents))
    {
      $this->_contents = array_merge($this->_contents, $contents);
    }
    else
    {
      $this->_contents[] = $contents;
    }
    return $this;
  }

  /**
   * @param $contents
   *
   * @return $this
   */
  public function prependContents($contents)
  {
    if(is_array($contents))
    {
      $this->_contents = array_merge($contents, $this->_contents);
    }
    else
    {
      array_unshift($this->_contents, $contents);
    }
    return $this;
  }

  /**
   * @param  $contents
   *
   * @return $this
   * @throws \Exception
   */
  public function setContents($contents)
  {
    if(!is_array($contents))
    {
      $contents = [$contents];
    }

    $this->_contents = $contents;
    return $this;
  }

  /**
   * @return array
   */
  public function getContent()
  {
    return $this->_contents;
  }

  /**
   * @param string $attribute
   *
   * @return string|null
   */
  public function getAttribute($attribute)
  {
    if(isset($this->_attributes[$attribute]))
    {
      return $this->_attributes[$attribute];
    }
    return null;
  }

  /**
   * @return string[]
   */
  public function getAttributes()
  {
    return $this->_attributes;
  }

  /**
   * @param string $attribute
   * @param string $value
   *
   * @return $this
   * @throws \Exception
   */
  public function setAttribute($attribute, $value = null)
  {
    $this->_attributes[$attribute] = $value;
    return $this;
  }

  /**
   * @param array|null $attributes
   *
   * @return $this
   */
  public function setAttributes(array $attributes)
  {
    foreach($attributes as $k => $v)
    {
      $this->setAttribute($k, $v);
    }
    return $this;
  }

  /**
   * @param string $attribute
   *
   * @return $this
   */
  public function removeAttribute($attribute)
  {
    unset($this->_attributes[$attribute]);
    return $this;
  }

  /**
   * @param array $attributes
   *
   * @return $this
   */
  public function removeAttributes(array $attributes)
  {
    foreach($attributes as $attribute)
    {
      $this->removeAttribute($attribute);
    }
    return $this;
  }

  /**
   * @param string|array $class
   *
   * @return $this
   */
  public function addClass($class)
  {
    $current = explode(' ', $this->getAttribute('class'));

    if(is_string($class))
    {
      $class = explode(' ', $class);
    }

    $new = array_merge($current, $class);

    $this->setAttribute('class', trim(implode(' ', $new)));

    return $this;
  }

  /**
   * @param string $class
   *
   * @return $this
   */
  public function removeClass($class)
  {
    $current = $this->getAttribute('class');
    $current = explode(' ', $current);
    $new = array_diff($current, [$class]);
    if($new)
    {
      $this->setAttribute('class', implode(' ', $new));
    }
    else
    {
      $this->removeAttribute('class');
    }
    return $this;
  }

  /**
   * @return string
   */
  protected function render()
  {
    $this->_preRender();

    if($this->_isVoid())
    {
      return '<' . $this->_getTag() . ' ' . $this->_renderAttributes() . ' />';
    }
    else
    {
      return '<' . $this->_getTag() . $this->_renderAttributes() . '>'
      . $this->_renderRecursive($this->getContent())
      . '</' . $this->_getTag() . '>';
    }
  }

  /**
   * @param $item
   *
   * @return string
   */
  protected function _renderRecursive($item)
  {
    if(is_array($item))
    {
      $return = '';
      foreach($item as $v)
      {
        $return .= $this->_renderRecursive($v);
      }
      return $return;
    }
    else
    {
      return (string)$item;
    }
  }

  /**
   * @return string
   */
  protected function _renderAttributes()
  {
    if(!$this->_attributes)
    {
      return '';
    }

    $return = [];
    foreach($this->_attributes as $attribute => $value)
    {
      if(is_null($value))
      {
        $return[] = $attribute;
      }
      else
      {
        $return[] = $attribute . '="' . $value . '"';
      }
    }

    return ($return ? ' ' : '') . implode(' ', $return);
  }

  /**
   *
   */
  protected function _preRender()
  {
    if(!$this->_getTag())
    {
      throw new HtmlBuilderInvalidTagException(
        'You can not have blank tag types'
      );
    }

    if($this->_isVoid() && $this->_contents)
    {
      throw new HtmlBuilderVoidTagException(
        $this->_getTag() . ' tags do not support childen.'
      );
    }
  }

  /**
   * @return string
   */
  public function __toString()
  {
    return $this->render();
  }
}
