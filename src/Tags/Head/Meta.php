<?php
namespace Jleagle\HtmlBuilder\Tags\Head;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractEmpty;

class Meta extends AbstractEmpty
{
  const NAME_APPLICATION_NAME = 'application-name';
  const NAME_AUTHOR = 'author';
  const NAME_DESCRIPTION = 'description';
  const NAME_GENERATOR = 'generator';
  const NAME_KEYWORDS = 'keywords';

  const HTTP_EQUIV_CONTENT_TYPE = 'content-type';
  const HTTP_EQUIV_DEFAULT_STYLE = 'default-style';
  const HTTP_EQUIV_REFRESH = 'refresh';

  protected function _getTag()
  {
    return 'meta';
  }

  protected function _isVoid()
  {
    return true;
  }

  /**
   * @param string $characterSet
   *
   * @return $this
   */
  public function setCharacterSet($characterSet)
  {
    $this->setAttribute('charset', $characterSet);
    return $this;
  }

  /**
   * @param string $contents
   *
   * @return $this
   */
  public function setContents($contents)
  {
    $this->setAttribute('content', $contents);
    return $this;
  }

  /**
   * @param string $httpEquiv
   *
   * @return $this
   */
  public function setHttpEquiv($httpEquiv)
  {
    $this->setAttribute('http-equiv', $httpEquiv);
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
}
