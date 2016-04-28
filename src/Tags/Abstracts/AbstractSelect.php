<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;
use Jleagle\HtmlBuilder\Tags\Forms\Option;

abstract class AbstractSelect extends AbstractTag
{
  /**
   * @param Option[] $options
   * @param string[] $attributes
   *
   * @return static
   */
  public static function make(array $options = [], $attributes = [])
  {
    $tag = new static();
    $tag->addOptions($options);
    $tag->setAttributes($attributes);
    return $tag;
  }

  /**
   * @param Option $option
   *
   * @return $this
   */
  public function addOption(Option $option)
  {
    $this->appendContents($option);
    return $this;
  }

  /**
   * @param Option[] $options
   *
   * @return $this
   */
  public function addOptions(array $options)
  {
    foreach($options as $option)
    {
      $this->addOption($option);
    }
    return $this;
  }
}
