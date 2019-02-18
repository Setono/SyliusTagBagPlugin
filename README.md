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

Plugin that integrates `Setono/TagBagBundle` into your Sylius project

</p>

## Making plugin requiring `Setono/TagBagBundle`

### Configure `composer.json`

```json
{
    "type": "sylius-plugin",
    "keywords": ["sylius", "sylius-plugin", "setono-tagbag", "..."],
    "require": {
        "sylius/sylius": "^1.4.0",
        "setono/tag-bag-bundle": "^0.2.0"
    },
    "suggest": {
        "setono/sylius-tag-bag-plugin": "Use it if you don't want to override shop's layout.html.twig"
    },
    "require-dev": {
        "setono/sylius-tag-bag-plugin": "^0.1.0"
    }
}
```

Note, that `setono/sylius-tag-bag-plugin` should be development dependency to
give your plugin user (application developer) a chance to not use it if he 
already have overriden Shop's `layout.html.twig` in his application 
with required by `Setono/TagBagBundle` (see https://github.com/Setono/TagBagBundle#usage).

### Add next blocks to plugin's `README.md`

* Require library:

```bash
# Omit setono/sylius-tag-bag-plugin if you want to
# override layout.html.twig as described at https://github.com/Setono/TagBagBundle#usage
composer require your/plugin setono/sylius-tag-bag-plugin
```

* Include bundles: 

```php
<?php
# config/bundles.php
return [
    // ...
    Setono\TagBagBundle\SetonoTagBagBundle::class => ['all' => true],

    // Use this bundle or override layout.html.twig as described at https://github.com/Setono/TagBagBundle#usage
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
