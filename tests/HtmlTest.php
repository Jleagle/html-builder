<?php
use \Jleagle\Html;

class HtmlTest extends PHPUnit_Framework_TestCase
{

  public function testForm()
  {

    $void = new Html('hr');
    $this->assertEquals('<hr />', (string)$void);

    $dom = new Html('x');
    $this->assertEquals('<x></x>', (string)$dom);

    $dom->append('child1');
    $this->assertEquals('<x>child1</x>', (string)$dom);

    $dom->prepend('child2');
    $this->assertEquals('<x>child2child1</x>', (string)$dom);

    $dom->addClass('y');
    $this->assertEquals('<x class="y">child2child1</x>', (string)$dom);

    $dom->addClass('z');
    $this->assertEquals('<x class="y z">child2child1</x>', (string)$dom);

    $dom->removeClass('y');
    $this->assertEquals('<x class="z">child2child1</x>', (string)$dom);

    $dom->removeClass('z');
    $this->assertEquals('<x>child2child1</x>', (string)$dom);

    $dom->setAttribute('att', 'val');
    $dom->setAttribute('att2', null);
    $this->assertEquals('<x att="val" att2>child2child1</x>', (string)$dom);

    $dom->removeAttribute('att');
    $this->assertEquals('<x att2>child2child1</x>', (string)$dom);

    $dom->setAttributes(['att1' => 'val1', 'att2' => 'val2']);
    $this->assertEquals(['att1' => 'val1', 'att2' => 'val2'], $dom->getAttributes());

    $this->assertEquals('x', $dom->getElement());

    $this->assertEquals(['child2', 'child1'], $dom->getChildren());

    $dom->setChildren('child');
    $this->assertEquals(['child'], $dom->getChildren());

    $static = Html::make('a', ['href' => 'Html.php', 'class' => 'link'], 'Some text');
    $this->assertEquals('<a href="Html.php" class="link">Some text</a>', $static);

  }

  public function testException()
  {
    $this->setExpectedException('Exception');
    $dom = new Html('', null, ['child', 'child2'], 'Some text');
    $dom = new Html('hr', null, ['child', 'child2']);
  }

}
