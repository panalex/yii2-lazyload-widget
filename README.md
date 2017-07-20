yii2-lazyload-widget
====================

[![Latest Stable Version](https://poser.pugx.org/panalex/yii2-lazyload-widget/v/stable)](https://packagist.org/packages/panalex/yii2-lazyload-widget)
[![License](https://poser.pugx.org/panalex/yii2-lazyload-widget/license)](https://packagist.org/packages/panalex/yii2-lazyload-widget)
[![Total Downloads](https://poser.pugx.org/panalex/yii2-lazyload-widget/downloads)](https://packagist.org/packages/panalex/yii2-lazyload-widget)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/panalex/yii2-lazyload-widget.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:lazyload&url=%5Bobject%20Object%5D)



Wrapper of [LazyLoad (vanilla-lazyload)](http://www.andreaverlicchi.eu/lazyload/) library. 

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist panalex/yii2-lazyload-widget "*"
```

or add

```
"panalex/yii2-lazyload-widget": "*"
```

to the `require` section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use panalex\lazyload\LazyLoad;

echo LazyLoad::widget(['src' => 'url/to/your/image.jpg']);
```

License
-------

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
