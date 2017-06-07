# Hashids

A hashids wrapper for Laravel &amp; Lumen.

## Installation

### Laravel

Inside `config/app.php` add the following line in your providers

```php
LaravelHashids\Providers\LaravelServiceProvider::class
```

and then simply run the following artisan command...

```bash
php artisan config:publish nblackburn/laravel-hashids
```

#### Facade

To add facade support for Laravel, add the following line inside your `config/app.php` under the alias section...

```php
'Parsedown' => LaravelParsedown\Facades\Parsedown::class,
```

### Lumen

Inside `bootstrap/app.php`, add the following line:

```php
$app->register(LaravelHashids\Providers\LumenServiceProvider::class);
```
then add the following to your `.env` file:

```ini
# HASHIDS

HASHIDS_SALT = YOURSECRETKEY
HASHIDS_LENGTH = 8
HASHIDS_ALPHABET = abcedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPAQRSTUVWXYZ1234567890
```

#### Facade

To add facade support, firstly uncomment the following line within `bootstrap/app.php`:

```php
// $app->withFacades();
```

then register the facade like so...

```php
$app->register(LaravelHashids\Facades\Hashids::class);
```

## Settings

|name    |description                     |default                                                        |
|--------|--------------------------------|---------------------------------------------------------------|
|salt    |The secret used for hashing.    |MYREALLYSECRETSALT                                             |
|length  |The maximum length of the hash. |10                                                             |
|alphabet|The characters used for hashing.|abcedefghijklmnopqrstuvwxyzABCEDEFGHIJKLMNOPQRSTUVWXYZ123456890|

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
Hashids::decode($encoded);
```

## License

This library is licensed under [MIT](http://choosealicense.org/licenses/mit), see [license.md](license.md) for details.
