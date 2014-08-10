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
   * @param string   $element
   * @param string[] $attributes
   * @param Dom[]    $children
   * @param string   $content
   */
  public function __construct($element = null, array $attributes = [], array $children = [], $content = null)
  {
    $this->setElement($element);
    $this->setAttributes($attributes);
    $this->setChildren($children);
    $this->setContent($content);
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
      if ($value)
      {
        $return[] = $attribute . '="' . $value . '"';
      }
      else
      {
        $return[] = $attribute;
      }
    }
    return ' '.implode(' ', $return);
  }

  public function removeAttribute($attribute)
  {
    unset($this->_attributes[$attribute]);
    return $this;
  }

  /**
   * @return string
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
    if (is_numeric($attribute))
    {
      throw new \Exception('Error adding attribute.');
    }
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
   * @param array $children
   *
   * @return $this
   * @throws \Exception
   */
  public function setChildren(array $children)
  {
    $this->_children = [];
    foreach($children as $child)
    {
      if ($child instanceof Dom)
      {
        $this->_children[] = $child;
      }
      else
      {
        throw new \Exception('Each child must be a Dom object.');
      }
    }
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
