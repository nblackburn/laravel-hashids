# Hashids

A hashids wrapper for Laravel &amp; Lumen.

![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat-square) ![Dependencies](https://img.shields.io/badge/dependencies-2-green.svg?style=flat-square) ![StyleCI](https://styleci.io/repos/38044910/shield)

## Installation

### Laravel

Inside `config/app.php` add the following line in your providers

```php
Nblackburn\Hashids\Providers\LaravelHashidsServiceProvider::class
```

and then simply run the following artisan command...

```bash
php artisan config:publish nblackburn/laravel-hashids
```

### Lumen

Inside `bootstrap/app.php`, add the following line:

```php
$app->register(LaravelHashids\Providers\LumenHashidsServiceProvider::class);
```
then add the following to your `.env` file:

```ini
HASHIDS_SALT = YOURSECRETKEY
HASHIDS_LENGTH = 8
HASHIDS_ALPHABET = abcedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPAQRSTUVWXYZ1234567890
```

## Facade

To add facade support, firstly uncomment the following line within `bootstrap/app.php`:

```php
// $app->withFacades();
```

then register the facade like so...

```php
class_alias(LaravelHashids\Facades\Hashids:class, 'Hashids');
```

## Settings

|name    |description                                 |default                                                        |
|--------|--------------------------------------------|---------------------------------------------------------------|
|salt    |The secret used for hashing.                |YOURSALTGOESHERE                                               |
|length  |The maximum length of the hash.             |10                                                             |
|alphabet|The characters used for hashing.            |abcedefghijklmnopqrstuvwxyzABCEDEFGHIJKLMNOPQRSTUVWXYZ123456890|

## Usage

### Encode

Encode a series of integers

```php
app('hashids')->encode(...$integers);
```

or with the facade

```php
Hashids::encode(...$integers);
```

### Decode

Decode a encoded string back to the original integers

```php
app('hashids')->decode($encoded);
```

or with the facade

```php
Hashids::decode($encoded)
```

## Donations

If you find this wrapper to be useful, please consider [donating](https://paypal.me/nblackburn).

## License

This library is licensed under [MIT](http://choosealicense.org/licenses/mit), see [license.md](license.md) for details.
