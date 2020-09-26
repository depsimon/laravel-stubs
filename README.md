# Opinionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/depsimon/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/depsimon/laravel-stubs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/depsimon/laravel-stubs/run-tests?label=tests)](https://github.com/depsimon/laravel-stubs/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/depsimon/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/depsimon/laravel-stubs)

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

- migrations don't have a `down` function
- controllers don't extend a base controller
- none of the model attributes are guarded
- use return type hints where possible
- most docblocks have been removed

## Installation

You can install the package via composer:

```bash
composer require depsimon/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan depsimon-stubs:publish"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan depsimon-stubs:publish
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email simon@gitscape.com instead of using the issue tracker.

## Credits

- [Simon Depelchin](https://github.com/depsimon)
- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
