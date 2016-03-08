# Laravel TurnKey

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a form to delete an account and display a feedback form after the process or just redirect to a goodbye page.

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-turnkey
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    'DraperStudio\TurnKey\TurnKeyServiceProvider'
];
```

To get started, you'll need to publish the vendor assets:

```bash
php artisan vendor:publish
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-turnkey.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Laravel-Turnkey/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-turnkey.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-turnkey.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-turnkey.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-turnkey
[link-travis]: https://travis-ci.org/DraperStudio/Laravel-Turnkey
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-turnkey/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-turnkey
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-turnkey
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
