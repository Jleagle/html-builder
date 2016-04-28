<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Style extends AbstractEmpty
{
  protected function _getTag()
  {
    return 'style';
  }

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
