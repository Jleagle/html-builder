<?php
namespace Jleagle;

class Html
{

  /**
   * @var string
   */
  private $_element;

  /**
   * @var string[]
   */
  private $_attributes;

  /**
   * @var Html[]|string[]
   */
  private $_children;

  /**
   * @var string[]
   */
  private $_voidElements = ["area", "base", "basefont", "br", "col", "command",
                            "embed", "frame", "hr", "img", "input", "keygen",
                            "link", "menuitem", "met", "meta", "param",
                            "source", "track", "wbr"];

  /**
   * @param null|string          $element
   * @param null|string[]        $attributes
   * @param null|Html[]|string[] $children
   *
   * @throws \Exception
   */
  public function __construct($element = null, array $attributes = null, $children = null)
  {
    $this->setElement($element);
    $this->setAttributes($attributes);
    $this->setChildren($children);

    if ($this->isVoid() && $this->_children)
    {
      throw new \Exception($element.' tags do not support childen.');
    }
  }

  /**
   * @param string                      $element
   * @param string[]                    $attributes
   * @param Html|string|Html[]|string[] $children
   *
   * @return Html
   */
  public static function make($element = null, array $attributes = null, $children = null)
  {
    return (string)new self($element, $attributes, $children);
  }

  /**
   * @param Html|string $dom
   *
   * @return $this
   */
  public function append($dom)
  {
    $this->_children[] = $dom;
    return $this;
  }

  /**
   * @param Html|string $dom
   *
   * @return $this
   */
  public function prepend($dom)
  {
    array_unshift($this->_children, $dom);
    return $this;
  }

  /**
   * @param string $class
   *
   * @return $this
   */
  public function addClass($class)
  {
    $current = $this->getAttribute('class');
    if ($current)
    {
      $current = explode(' ', $current);
    }
    else
    {
      $current = [];
    }
    $current[] = $class;
    $this->setAttribute('class', implode(' ', $current));
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
    if ($new)
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
   * @return bool
   */
  private function isVoid()
  {
    return ($this->_element && in_array($this->_element, $this->_voidElements));
  }

  /**
   * @return string
   */
  private function render()
  {
    $return = '';
    if ($this->_element)
    {
      $return .= '<'.$this->_element . $this->renderAttributes();
      if ($this->isVoid())
      {
        $return .= ' /';
      }
      $return .= '>';
    }
    foreach($this->_children as $child)
    {
      $return .= (string)$child;
    }
    if ($this->_element && (!$this->isVoid()))
    {
      $return .= '</'.$this->_element.'>';
    }
    return $return;
  }

  /**
   * @return string
   */
  private function renderAttributes()
  {
    if (!$this->_attributes)
    {
      return '';
    }
    $return = [];
    foreach($this->_attributes as $attribute => $value)
    {
      if (is_null($value))
      {
        $return[] = $attribute;
      }
      else
      {
        $return[] = $attribute . '="' . $value . '"';
      }
    }
    return ' '.implode(' ', $return);
  }

  /**
   * @return string string
   */
  public function getElement()
  {
    return $this->_element;
  }

  /**
   * @param string $attribute
   *
   * @return string|null
   */
  private function getAttribute($attribute)
  {
    if (isset($this->_attributes[$attribute]))
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
   * @return Html[]|string[]
   */
  public function getChildren()
  {
    return $this->_children;
  }

  /**
   * @param string $element
   *
   * @return $this
   */
  public function setElement($element)
  {
    $this->_element = $element;
    return $this;
  }

  /**
   * @param array $attributes
   *
   * @return $this
   */
  public function setAttributes($attributes)
  {
    if (is_array($attributes))
    {
      foreach($attributes as $k => $v)
      {
        $this->setAttribute($k, $v);
      }
    }
    return $this;
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
   * @param Html[]|string[] $children
   *
   * @return $this
   * @throws \Exception
   */
  public function setChildren($children)
  {
    if (is_null($children))
    {
      $this->_children = [];
      return $this;
    }

    if(!is_array($children))
    {
      $children = [$children];
    }

    $this->_children = $children;
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
   * @return string
   */
  public function __toString()
  {
    return $this->render();
  }

}
