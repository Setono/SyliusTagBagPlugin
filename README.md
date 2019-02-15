<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">SetonoSyliusTagBagPlugin</h1>

<p align="center">

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]

Plugin that integrates Setono/TagBagBundle into your Sylius project

</p>

## Installation

### Step 1: Download the plugin

Open a command console, enter your project directory and execute the following command to download the latest stable version of this plugin:

```bash
$ composer require setono/sylius-tag-bag-plugin
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.


### Step 2: Enable the plugin

Then, enable the plugin by adding it to the list of registered plugins/bundles
in the `config/bundles.php` file of your project:

```php
<?php
# config/bundles.php
return [
    // ...
    Setono\SyliusTagBagPlugin\SetonoSyliusTagBagPlugin::class => ['all' => true],
    // ...
];
```

## Development

### Testing (manual)

* Run `composer try` to run test application
* Navigate to any product (http://localhost:8000/en_US/products/book)
* You will see javascript alert added to tagbag by `app.event_subscriber.shop`

### Contributing

Run `composer checks` before push please.

[ico-version]: https://img.shields.io/packagist/v/setono/sylius-tag-bag-plugin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://travis-ci.com/Setono/SyliusTagBagPlugin.svg?branch=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Setono/SyliusTagBagPlugin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/setono/sylius-tag-bag-plugin
[link-travis]: https://travis-ci.com/Setono/SyliusTagBagPlugin
[link-code-quality]: https://scrutinizer-ci.com/g/Setono/SyliusTagBagPlugin
