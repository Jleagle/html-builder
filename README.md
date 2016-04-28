# html-builder

A package to create clean HTML

### Usage

Create elements using their class:

```php
$div = new Div();
$image = new Img('http://example.com/img.png);
```

Each class has different constructor parameters to help you create the element: 

```php
$abbr = new Abbr('WIFI', 'Wireless Fidelity');
```

Which returns `<abbr title="Wireless Fidelity">WIFI</abbr>`

And helper methods to do common tasks:

```php
$ul = new Ul();
foreach([1, 2, 3] as $v)
{
  $li = new Li('item '.$v);
  $ul->addListItem($li);
}
```

Which will echo

```html
<ul>
  <li>item 1</li>
  <li>item 2</li>
  <li>item 3</li>
</ul>
```

### Credits
Tag structure taken from [![/u/brianjenkins94](https://www.reddit.com/r/webdev/comments/3yl9yc/i_created_an_html5_mindmap_would_anyone_mind/)
