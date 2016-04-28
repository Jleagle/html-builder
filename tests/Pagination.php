<?php
namespace Jleagle\HtmlBuilder\Bootstrap;

use Jleagle\HtmlBuilder\Tags\Grouping\Li;
use Jleagle\HtmlBuilder\Tags\Grouping\Ul;
use Jleagle\HtmlBuilder\Tags\Sections\Nav;
use Jleagle\HtmlBuilder\Tags\Text\A;
use Jleagle\HtmlBuilder\Tags\Text\Span;

class Pagination extends Nav
{
  protected $_page;
  protected $_pages;
  protected $_format;

  /**
   * @param int    $page
   * @param int    $pages
   * @param string $format
   *
   * @return static
   */
  public static function make($page, $pages, $format)
  {
    $tag = new static;
    $tag->_page = $page;
    $tag->_pages = $pages;
    $tag->_format = $format;
    return $tag;
  }

  /**
   * @return int[]
   */
  private function _getPages()
  {
    $pages = [];

    // Left pages
    foreach(range(1, 3) as $page)
    {
      if($page <= $this->_pages)
      {
        $pages[] = $page;
      }
    }

    // Middle pages
    foreach(range($this->_page - 2, $this->_page + 2) as $page)
    {
      if($page >= 1 && $page <= $this->_pages)
      {
        $pages[] = $page;
      }
    }

    // Right pages
    foreach(range($this->_pages - 2, $this->_pages) as $page)
    {
      if($page >= 1)
      {
        $pages[] = $page;
      }
    }

    $pages = array_unique($pages);
    sort($pages);
    return $pages;
  }

  /**
   * @param array $array
   *
   * @return mixed[]
   */
  private function _findGaps(array $array)
  {
    $gap = 'x';

    for($i = 1; $i < count($array); $i++)
    {
      $valueR = $array[$i];
      $valueL = $array[$i - 1] === $gap ? $array[$i - 2] : $array[$i - 1];
      if($valueR > $valueL + 1)
      {
        array_splice($array, $i++, 0, $gap);
      }
    }
    return $array;
  }

  /**
   * @param string $page
   *
   * @return string
   */
  private function _makeLink($page)
  {
    return str_replace('{{page}}', $page, $this->_format);
  }

  /**
   * @return Ul
   */
  protected function _getContentForRender()
  {
    $listItems = [];

    // Make previous link
    $previous = new A($this->_makeLink($this->_page - 1), 'Previous');
    if($this->_page <= 1)
    {
      $previous->removeAttribute('href');
    }
    $previous = new Li($previous);
    if($this->_page <= 1)
    {
      $previous->addClass('disabled');
    }
    $listItems[] = $previous;

    // Make numbers
    foreach($this->_findGaps($this->_getPages()) as $page)
    {
      if(is_numeric($page))
      {
        $link = new A($this->_makeLink($page), $page);
        if($this->_page == $page)
        {
          $link->removeAttribute('href');
        }
        $link = new Li($link);
        if($this->_page == $page)
        {
          $link->addClass('active');
        }
      }
      else
      {
        $link = new Span('&hellip;');
        $link = new Li($link);
        $link->addClass('disabled');
      }
      $listItems[] = $link;
    }

    // Make next link
    $next = new A($this->_makeLink($this->_page + 1), 'Next');
    if($this->_page >= $this->_pages)
    {
      $next->removeAttribute('href');
    }
    $next = new Li($next);
    if($this->_page >= $this->_pages)
    {
      $next->addClass('disabled');
    }
    $listItems[] = $next;

    // Output
    $list = new Ul();
    $list->addClass('pagination')->addListItems($listItems);
    return $list;
  }
}
