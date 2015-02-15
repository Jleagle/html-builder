<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\Core\Tag;
use Jleagle\HtmlBuilder\Tags\Forms\Option;

abstract class SelectAbstract extends Tag
{
  /**
   * @param Option[] $options
   * @param string[] $attributes
   */
  public function __construct(array $options = [], $attributes = [])
  {
    $this->addOptions($options);
    $this->setAttributes($attributes);
  }

  /**
   * @param Option $option
   *
   * @return $this
   */
  public function addOption(Option $option)
  {
    $this->appendContent($option);
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
