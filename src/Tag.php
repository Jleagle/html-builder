<?php
namespace Jleagle\HtmlBuilder;

class Tag
{
  const TARGET_BLANK = '_blank';
  const TARGET_SELF = '_self';
  const TARGET_PARENT = '_parent';
  const TARGET_TOP = '_top';

  const FLAG_OPENING = 'flag_opening';
  const FLAG_CLOSING = 'flag_closing';

  protected $_tag;

  private $_attributes = [];
  private $_contents = [];
  private $_flags = [];

  /**
   * @var string[]
   */
  private $_voidElements = [
    "area",
    "base",
    "basefont",
    "br",
    "col",
    "command",
    "embed",
    "frame",
    "hr",
    "img",
    "input",
    "keygen",
    "link",
    "meta",
    "param",
    "source",
    "track",
    "wbr"
  ];

  /**
   * @param string   $element
   * @param string[] $attributes
   * @param          $content
   */
  public function __construct(
    $element, array $attributes = [], $content = []
  )
  {
    $this->setTag($element);
    $this->setAttributes($attributes);
    $this->setContent($content);
  }

  /**
   * @param string $element
   *
   * @return $this
   */
  public function setTag($element)
  {
    $this->_tag = $element;
    return $this;
  }

  /**
   * @return string
   */
  public function getTag()
  {
    return $this->_tag;
  }

  /**
   * @param string $flag
   *
   * @return $this
   */
  public function setFlag($flag)
  {
    $this->_flags[] = $flag;
    return $this;
  }

  /**
   * @param string $flag
   *
   * @return $this
   */
  public function unsetFlag($flag)
  {
    $this->_flags = array_diff($this->_flags, [$flag]);
    return $this;
  }

  /**
   * @param string $flag
   *
   * @return bool
   */
  public function isFlagSet($flag)
  {
    return in_array($flag, $this->_flags);
  }

  /**
   * @param $content
   *
   * @return $this
   */
  public function appendContent($content)
  {
    if(is_array($content))
    {
      $this->_contents = array_merge($this->_contents, $content);
    }
    else
    {
      $this->_contents[] = $content;
    }
    return $this;
  }

  /**
   * @param Tag|string $content
   *
   * @return $this
   */
  public function prependContent($content)
  {
    if(is_array($content))
    {
      $this->_contents = array_merge($content, $this->_contents);
    }
    else
    {
      array_unshift($this->_contents, $content);
    }
    return $this;
  }

  /**
   * @param  $content
   *
   * @return $this
   * @throws \Exception
   */
  public function setContent($content)
  {
    if(is_null($content))
    {
      $this->_contents = [];
      return $this;
    }

    if(!is_array($content))
    {
      $content = [$content];
    }

    $this->_contents = $content;
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
   * @param string $class
   *
   * @return $this
   */
  public function addClass($class)
  {
    $current = $this->getAttribute('class');
    if($current)
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
   * @return bool
   */
  private function isVoid()
  {
    return ($this->_tag && in_array($this->_tag, $this->_voidElements));
  }

  /**
   * @return string
   * @throws \Exception
   */
  public function render()
  {
    $this->checks();

    if($this->isVoid() && $this->_contents)
    {
      throw new HtmlBuilderExcepton(
        $this->getTag() . ' tags do not support childen.'
      );
    }

    $return = '';

    // Opening tag
    if($this->_tag)
    {
      $return .= '<' . $this->_tag . $this->renderAttributes();
      if($this->isVoid())
      {
        $return .= ' /';
      }
      $return .= '>';
    }

    // Make contents
    $content = $this->_getContentForRender();
    foreach($content as $elements)
    {
      if(is_array($elements))
      {
        foreach($elements as $element)
        {
          $return .= (string)$element;
        }
      }
      else
      {
        $return .= (string)$elements;
      }
    }

    // Closing tag
    if($this->_tag && (!$this->isVoid()))
    {
      $return .= '</' . $this->_tag . '>';
    }

    return $return;
  }

  /**
   * @return array
   */
  protected function _getContentForRender()
  {
    return $this->getContent();
  }

  /**
   * @return string
   */
  private function renderAttributes()
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
    return ' ' . implode(' ', $return);
  }

  /**
   *
   */
  protected function checks()
  {
  }

  /**
   * @return string
   */
  public function __toString()
  {
    return $this->render();
  }
}
