<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\EmptyAbstract;

class Style extends EmptyAbstract
{
  protected $_tag = 'style';

  /**
   * @param bool $scoped
   *
   * @return $this
   */
  public function setScoped($scoped = true)
  {
    if($scoped)
    {
      $this->setAttribute('scoped', 'scoped');
    }
    else
    {
      $this->removeAttribute('scoped');
    }
    return $this;
  }

  /**
   * @param string $media
   *
   * @return $this
   */
  public function setMedia($media)
  {
    $this->setAttribute('media', $media);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
    return $this;
  }
}
