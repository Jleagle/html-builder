<?php
use Jleagle\HtmlBuilder\Bootstrap\Pagination;

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
    $this->assertEquals(
      '<audio preload="preload" src="http://source.com" autoplay="autoplay" muted="muted" loop="loop" controls="controls">Content</audio>',
      (string)$audio
    );

    $audio->setAutoPlay(false);
    $audio->setMuted(false);
    $audio->setLoop(false);
    $audio->setControls(false);
    $audio->addSource(
      new \Jleagle\HtmlBuilder\Tags\Source('http://source.com')
    );
    $this->assertEquals(
      '<audio preload="preload" src="http://source.com">Content<source src="http://source.com" /></audio>',
      (string)$audio
    );

    $ul = new \Jleagle\HtmlBuilder\Tags\Lists\Ul();
    foreach(range(1, 3) as $v)
    {
      $li = new \Jleagle\HtmlBuilder\Tags\Lists\Li('item ' . $v);
      $ul->addListItem($li);
    }
    $this->assertEquals(
      '<ul><li>item 1</li><li>item 2</li><li>item 3</li></ul>',
      (string)$ul
    );
  }

  public function testPagination()
  {
    $pag = new Pagination(1, 3, '/search?page={{page}}');
    $this->assertEquals(
      '<nav><ul class="pagination"><li class="disabled"><a>Previous</a></li><li class="active"><a>1</a></li><li><a href="/search?page=2">2</a></li><li><a href="/search?page=3">3</a></li><li><a href="/search?page=2">Next</a></li></ul></nav>',
      (string)$pag
    );

    $pag = new Pagination(10, 20, '/search?page={{page}}');
    $this->assertEquals(
      '<nav><ul class="pagination"><li><a href="/search?page=9">Previous</a></li><li><a href="/search?page=1">1</a></li><li><a href="/search?page=2">2</a></li><li><a href="/search?page=3">3</a></li><li class="disabled"><span>&hellip;</span></li><li><a href="/search?page=8">8</a></li><li><a href="/search?page=9">9</a></li><li class="active"><a>10</a></li><li><a href="/search?page=11">11</a></li><li><a href="/search?page=12">12</a></li><li class="disabled"><span>&hellip;</span></li><li><a href="/search?page=18">18</a></li><li><a href="/search?page=19">19</a></li><li><a href="/search?page=20">20</a></li><li><a href="/search?page=11">Next</a></li></ul></nav>',
      (string)$pag
    );

    $pag = new Pagination(5, 5, '/search?page={{page}}');
    $this->assertEquals(
      '<nav><ul class="pagination"><li><a href="/search?page=4">Previous</a></li><li><a href="/search?page=1">1</a></li><li><a href="/search?page=2">2</a></li><li><a href="/search?page=3">3</a></li><li><a href="/search?page=4">4</a></li><li class="active"><a>5</a></li><li class="disabled"><a>Next</a></li></ul></nav>',
      (string)$pag
    );
  }

  public function testException()
  {
    $this->setExpectedException('Exception');
    $hr = new \Jleagle\HtmlBuilder\Core\Tag('hr', [], 'content');
    $hr->render();
  }
}
