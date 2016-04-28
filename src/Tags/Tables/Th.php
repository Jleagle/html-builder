<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Th extends AbstractContent
{
  const SCOPE_col = 'col';
  const SCOPE_colgroup = 'colgroup';
  const SCOPE_row = 'row';
  const SCOPE_rowgroup = 'rowgroup';

  protected function _getTag()
  {
    return 'th';
  }

  /**
   * @param string $abbr
   */
  public function setAbbr($abbr)
  {
    $this->setAttribute('abbr', $abbr);
  }

  /**
   * @param int $colSpan
   */
  public function setColSpan($colSpan)
  {
    $this->setAttribute('colspan', $colSpan);
  }

  /**
   * @param int $rowSpan
   */
  public function setRowSpan($rowSpan)
  {
    $this->setAttribute('rowspan', $rowSpan);
  }

  /**
   * @param string $headers
   */
  public function setHeaders($headers)
  {
    $this->setAttribute('headers', $headers);
  }

  /**
   * @param string $scope
   */
  public function setScope($scope)
  {
    $this->setAttribute('headers', $scope);
  }

  /**
   * @param string $sorted
   */
  public function setSorted($sorted)
  {
    $this->setAttribute('headers', $sorted);
  }
}
