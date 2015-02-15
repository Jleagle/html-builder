# html-builder

[![Build Status (Scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/html-builder/badges/build.png)](https://scrutinizer-ci.com/g/Jleagle/html-builder)
[![Code Quality (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/html-builder/badges/quality-score.png)](https://scrutinizer-ci.com/g/Jleagle/html-builder)
[![Latest Stable Version](https://poser.pugx.org/Jleagle/html-builder/v/stable.png)](https://packagist.org/packages/Jleagle/html-builder)
[![Latest Unstable Version](https://poser.pugx.org/Jleagle/html-builder/v/unstable.png)](https://packagist.org/packages/Jleagle/html-builder)

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
