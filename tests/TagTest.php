<?php
class TagTest extends PHPUnit_Framework_TestCase
{

  public function testForm()
  {
    $div = new \Jleagle\HtmlBuilder\Tag('div', [], 'content');
    $this->assertEquals('<div>content</div>', (string)$div);

    $div->appendContent('append');
    $div->prependContent('prepend');
    $this->assertEquals('<div>prependcontentappend</div>', (string)$div);

    $a = new \Jleagle\HtmlBuilder\Tags\A('http://google.com', 'Google');
    $this->assertEquals('<a href="http://google.com">Google</a>', (string)$a);

    $abbr = new \Jleagle\HtmlBuilder\Tags\Abbr('JE', 'James Eagle');
    $this->assertEquals('<abbr title="James Eagle">JE</abbr>', (string)$abbr);
  }

  public function testException()
  {
    $this->setExpectedException('Exception');
    $hr = new \Jleagle\HtmlBuilder\Tag('hr', [], 'content');
    $hr->render();
  }

}
