# Laravel TurnKey

This package provides a form to delete an account and display a feedback form after the process or just redirect to a goodbye page.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-turnkey
```

And then include the service provider within `app/config/app.php`.

``` php
'providers' => [
    'BrianFaust\TurnKey\TurnKeyServiceProvider'
];
```

To get started, you'll need to publish the vendor assets:

```bash
php artisan vendor:publish
```

## Usage

``` php
$skeleton = new BrianFaust\Skeleton();
echo $skeleton->echoPhrase('Hello, BrianFaust!');
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
