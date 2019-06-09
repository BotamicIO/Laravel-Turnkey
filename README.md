# Laravel TurnKey

[![Build Status](https://img.shields.io/travis/artisanry/Turnkey/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Turnkey)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/turnkey.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Turnkey.svg?style=flat-square)](https://github.com/artisanry/Turnkey/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Turnkey.svg?style=flat-square)](https://packagist.org/packages/artisanry/Turnkey)

This package provides a form to delete an account and display a feedback form after the process or just redirect to a goodbye page.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/turnkey
```

To get started, you'll need to publish the vendor assets:

```bash
php artisan vendor:publish --provider="Artisanry\TurnKey\TurnKeyServiceProvider"
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
