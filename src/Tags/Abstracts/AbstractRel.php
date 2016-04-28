<?php
namespace Jleagle\HtmlBuilder\Tags\Abstracts;

use Jleagle\HtmlBuilder\AbstractTag;

abstract class AbstractRel extends AbstractTag
{
  const REL_ALTERNATE = 'alternate';
  const REL_AUTHOR = 'author';
  const REL_BOOKMARK = 'bookmark';
  const REL_HELP = 'help';
  const REL_LICENSE = 'license';
  const REL_NEXT = 'next';
  const REL_NOFOLLOW = 'nofollow';
  const REL_NOREFERRER = 'noreferrer';
  const REL_PREFETCH = 'prefetch';
  const REL_PREV = 'prev';
  const REL_SEARCH = 'search';
  const REL_TAG = 'tag';

  /**
   * @param string $relationship
   *
   * @return $this
   */
  public function setRelationship($relationship)
  {
    $this->setAttribute('rel', $relationship);
    return $this;
  }
}
