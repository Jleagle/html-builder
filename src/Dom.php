<?php
namespace Jleagle\Helpers;

class Dom
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
   * @var Dom[]
   */
  private $_children;

  /**
   * @var string
   */
  private $_content;

  /**
   * @var string[]
   */
  private $_voidElements = ["area", "base", "basefont", "br", "col", "command", "embed",
                            "frame", "hr", "img", "input", "keygen", "link", "menuitem",
                            "met", "meta", "param", "source", "track", "wbr"];

  /**
   * @param string    $element
   * @param string[]  $attributes
   * @param Dom|Dom[] $children
   * @param string    $content
   *
   * @throws \Exception
   */
  public function __construct($element = null, array $attributes = [], $children = [], $content = null)
  {
    $this->setElement($element);
    $this->setAttributes($attributes);
    $this->setChildren($children);
    $this->setContent($content);

    if ($this->_content && $this->isVoid())
    {
      throw new \Exception($element.' tags do not support content.');
    }
  }

  /**
   * @param Dom $dom
   *
   * @return $this
   */
  public function append(Dom $dom)
  {
    $this->_children[] = $dom;
    return $this;
  }

  /**
   * @param Dom $dom
   *
   * @return $this
   */
  public function prepend(Dom $dom)
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
    $new = array_diff($current, array($class));
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
    return ($this->_element && isset($this->_voidElements[$this->_element]));
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
      if ($this->isVoid() && !$this->_content)
      {
        $return .= ' /';
      }
      $return .= '>';
    }
    $return .= $this->_content;
    foreach($this->_children as $child)
    {
      $return .= (string)$child;
    }
    if ($this->_element && (!$this->isVoid() || $this->_content))
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
      if (is_numeric($attribute))
      {
        $return[] = $value;
      }
      else
      {
        $return[] = $attribute . '="' . $value . '"';
      }
    }
    return ' '.implode(' ', $return);
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
  public function getAttribute($attribute)
  {
    if (isset($this->_attributes[$attribute]))
    {
      return $this->_attributes[$attribute];
    }
    else
    {
      return '';
    }
  }

  /**
   * @return string[]
   */
  public function getAttributes()
  {
    return $this->_attributes;
  }

  /**
   * @return Dom[]
   */
  public function getChildren()
  {
    return $this->_children;
  }

  /**
   * @return string
   */
  public function getContent()
  {
    return $this->_content;
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
   * @param string $attribute
   * @param string $value
   *
   * @return $this
   * @throws \Exception
   */
  public function setAttribute($attribute, $value = '')
  {
    $this->_attributes[$attribute] = $value;
    return $this;
  }

  /**
   * @param array $attributes
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
   * @param Dom|Dom[] $children
   *
   * @return $this
   * @throws \Exception
   */
  public function setChildren($children)
  {
    if(!is_array($children))
    {
      $children = [$children];
    }
    foreach($children as $k => $child)
    {
      if (!$child instanceof Dom)
      {
        unset($children[$k]);
      }
    }
    $this->_children = $children;
    return $this;
  }

  /**
   * @param string $content
   *
   * @return $this
   */
  public function setContent($content)
  {
    $this->_content = $content;
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
