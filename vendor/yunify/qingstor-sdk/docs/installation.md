# Installation Guide

## Composer (Recommended)

You can use [composer](https://getcomposer.org/doc/00-intro.md) to download `qingstor-sdk`:

```bash
composer require yunify/qingstor-sdk
```

## Phar

1. Download `qingstor-sdk.phar` from the [latest release](https://github.com/yunify/qingstor-sdk-php/releases)
2. Include in your php code

```php
include '/path/to/qingstor-sdk.phar';
```

or

```php
require_once '/path/to/qingstor-sdk.phar';
```

## Source Code

1. Clone source code

```bash
git clone git@github.com:yunify/qingstor-sdk-php.git
cd qingstor-sdk-php && composer install
```

2. Require `autoload.php` in your php code

```php
require_once '/path/to/qingstor-sdk/vendor/autoload.php';
```
