<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\ContentAbstract;

class Td extends ContentAbstract
{
  protected $_tag = 'td';

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
}
