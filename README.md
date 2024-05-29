# Provides a Laravel SDK for PubRec API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrisreedio/laravel-pubrec-sdk.svg?style=flat-square)](https://packagist.org/packages/chrisreedio/laravel-pubrec-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/chrisreedio/laravel-pubrec-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/chrisreedio/laravel-pubrec-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/chrisreedio/laravel-pubrec-sdk/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/chrisreedio/laravel-pubrec-sdk/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrisreedio/laravel-pubrec-sdk.svg?style=flat-square)](https://packagist.org/packages/chrisreedio/laravel-pubrec-sdk)

This package provides a Laravel SDK for the PubRec API.

## Installation

You can install the package via composer:

```bash
composer require chrisreedio/laravel-pubrec-sdk
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-pubrec-sdk-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('PUBREC_API_KEY'),
    'api_url' => env('PUBREC_API_URL', 'https://api.pubrec.io'),
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-pubrec-sdk-views"
```

## Usage

```php
$pubRecSDK = new ChrisReedIO\PubRecSDK();
echo $pubRecSDK->echoPhrase('Hello, ChrisReedIO!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chris Reed](https://github.com/chrisreedio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
