HTML Builder
============

[![Build Status (Travis)](https://img.shields.io/travis/Jleagle/html-builder/master.svg)](https://travis-ci.org/Jleagle/html-builder/builds)
[![Code Coverage (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/html-builder/badges/coverage.png)](https://scrutinizer-ci.com/g/Jleagle/html-builder)
[![Code Quality (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/html-builder/badges/quality-score.png)](https://scrutinizer-ci.com/g/Jleagle/html-builder)
[![Dependency Status (versioneye.com)](https://www.versioneye.com/php/Jleagle:html-builder/badge.svg)](https://www.versioneye.com/php/Jleagle:html-builder)
[![Downloads Total](https://poser.pugx.org/Jleagle/html-builder/downloads.svg)](https://packagist.org/packages/Jleagle/html-builder)

This class generates valid HTML for you.

### Using the class

Create an empty element by specifiying the element type:

```php
Html::make('div');
```

Which returns `<div></div>`

Add attributs to the element by adding an associative array of element names and values:

```php
Html::make('div', ['class' => 'div-class', 'id' => 'div-id']);
```

Which returns `<div class="div-class" id="div-id"></div>`

To add content to your tag, you can add text or an Html object.
It can also handle an array of values.

```php
Html::make('div', ['class' => 'div-class', 'id' => 'div-id']);
```

Which returns `<div class="div-class" id="div-id">div content!</div>`

An example to show nesting elements

```php
$listItems = [];
foreach(range(1, 5) as $value)
{
  $listItems[] = new Html('li', null, $value);
}
echo Html::make('ul', ['id' => 'list'], $listItems);
```

Which will echo

```html
<ul id="list">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
</ul>
```
