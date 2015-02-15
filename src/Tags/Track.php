<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Core\HtmlBuilderExcepton;
use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Track extends ContentAbstract
{
  const KIND_CAPTIONS = 'captions';
  const KIND_CHAPTERS = 'chapters';
  const KIND_DESCRIPTIONS = 'descriptions';
  const KIND_METADATA = 'metadata';
  const KIND_SUBTITLES = 'subtitles';

  protected $_tag = 'track';

  /**
   * @param string $source
   */
  public function __construct($source)
  {
    $this->setSource($source);
  }


  /**
   * @return $this
   *
   * @throws HtmlBuilderExcepton
   */
  protected function checks()
  {
    if(
      $this->getAttribute('kind') == 'subtitles' &&
      !$this->getAttribute('srclang')
    )
    {
      throw new HtmlBuilderExcepton(
        'If kind is set to subtitles, srclang is required'
      );
    }
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return $this
   */
  public function setDefault($default = true)
  {
    if($default)
    {
      $this->setAttribute('default', 'default');
    }
    else
    {
      $this->removeAttribute('default');
    }
    return $this;
  }

  /**
   * @param string $kind
   *
   * @return $this
   */
  public function setKind($kind)
  {
    $this->setAttribute('kind', $kind);
    return $this;
  }

  /**
   * @param string $label
   *
   * @return $this
   */
  public function setLabel($label)
  {
    $this->setAttribute('label', $label);
    return $this;
  }

  /**
   * @param string $source
   *
   * @return $this
   */
  public function setSource($source)
  {
    $this->setAttribute('src', $source);
    return $this;
  }

  /**
   * @param string $sourceLanguage
   *
   * @return $this
   */
  public function setSourceLanguage($sourceLanguage)
  {
    $this->setAttribute('srclang', $sourceLanguage);
    return $this;
  }
}
