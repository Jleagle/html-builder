<?php
namespace Jleagle\HtmlBuilder\Tags;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Iframe extends ContentAbstract
{
  const SANDBOX_FORMS = 'allow-forms';
  const SANDBOX_POINTER_LOCK = 'allow-pointer-lock';
  const SANDBOX_POPUPS = 'allow-popups';
  const SANDBOX_SAME_ORIGIN = 'allow-same-origin';
  const SANDBOX_SCRIPTS = 'allow-scripts';
  const SANDBOX_TOP_NAVIGATION = 'allow-top-navigation';

  protected $_tag = 'iframe';

  /**
   * @param int $width
   *
   * @return $this
   */
  public function setWidth($width)
  {
    $this->setAttribute('width', $width);
    return $this;
  }

  /**
   * @param int $height
   *
   * @return $this
   */
  public function setHeight($height)
  {
    $this->setAttribute('height', $height);
    return $this;
  }

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name)
  {
    $this->setAttribute('name', $name);
    return $this;
  }

  /**
   * @param string $sandbox
   *
   * @return $this
   */
  public function setSandbox($sandbox)
  {
    $this->setAttribute('sandbox', $sandbox);
    return $this;
  }

  /**
   * @param string $seamless
   *
   * @return $this
   */
  public function setSeamless($seamless)
  {
    $this->setAttribute('seamless', $seamless);
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
   * @param string $sourceDoc
   *
   * @return $this
   */
  public function setSourceDoc($sourceDoc)
  {
    $this->setAttribute('srcdoc', $sourceDoc);
    return $this;
  }
}
