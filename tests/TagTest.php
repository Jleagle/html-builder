<?php
class TagTest extends PHPUnit_Framework_TestCase
{

  public function testForm()
  {
    $div = new \Jleagle\HtmlBuilder\Core\Tag('div', [], 'content');
    $this->assertEquals('<div>content</div>', (string)$div);

    $div->appendContent('append');
    $div->prependContent('prepend');
    $this->assertEquals('<div>prependcontentappend</div>', (string)$div);
  }

  public function testTagClasses()
  {
    $a = new \Jleagle\HtmlBuilder\Tags\A('http://google.com', 'Google');
    $this->assertEquals('<a href="http://google.com">Google</a>', (string)$a);

    $abbr = new \Jleagle\HtmlBuilder\Tags\Abbr('JE', 'James Eagle');
    $this->assertEquals('<abbr title="James Eagle">JE</abbr>', (string)$abbr);

    $audio = new \Jleagle\HtmlBuilder\Tags\Audio('Content');
    $audio->setPreload('preload');
    $audio->setSource('http://source.com');
    $audio->setAutoPlay();
    $audio->setMuted();
    $audio->setLoop();
    $audio->setControls();
    $this->assertEquals('<audio preload="preload" src="http://source.com" autoplay="autoplay" muted="muted" loop="loop" controls="controls">Content</audio>', (string)$audio);

    $audio->setAutoPlay(false);
    $audio->setMuted(false);
    $audio->setLoop(false);
    $audio->setControls(false);
    $audio->addSource(new \Jleagle\HtmlBuilder\Tags\Source('http://source.com'));
    $this->assertEquals('<audio preload="preload" src="http://source.com">Content<source src="http://source.com" /></audio>', (string)$audio);

    $ul = new \Jleagle\HtmlBuilder\Tags\Lists\Ul();
    foreach(range(1, 3) as $v)
    {
      $li = new \Jleagle\HtmlBuilder\Tags\Lists\Li('item '.$v);
      $ul->addListItem($li);
    }
    $this->assertEquals('<ul><li>item 1</li><li>item 2</li><li>item 3</li></ul>', (string)$ul);

  }

  public function testException()
  {
    $this->setExpectedException('Exception');
    $hr = new \Jleagle\HtmlBuilder\Core\Tag('hr', [], 'content');
    $hr->render();
  }

}
