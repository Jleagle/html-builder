<?php
namespace Jleagle\HtmlBuilder\Tags\Tables;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class Td extends AbstractContent
{
  protected function _getTag()
  {
    return 'td';
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
}
