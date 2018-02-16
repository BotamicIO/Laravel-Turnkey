# Laravel TurnKey

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Turnkey/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Turnkey)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-turnkey.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Turnkey.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Turnkey/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Turnkey.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Turnkey)

This package provides a form to delete an account and display a feedback form after the process or just redirect to a goodbye page.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-turnkey
```

To get started, you'll need to publish the vendor assets:

```bash
php artisan vendor:publish --provider="BrianFaust\TurnKey\TurnKeyServiceProvider"
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
