# Hashids

A hashids wrapper for Laravel 5+.

![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat-square) ![Dependancies](https://img.shields.io/badge/dependancies-1-green.svg?style=flat-square)

## Laravel

### Installation

Inside `config/app.php` add the following line in your providers

```php
Nblackburn\Hashids\Providers\HashidsServiceProvider::class
```

### Facade

To add facade support, add the following line to your aliases within `config/app.php`:

```php
Nblackburn\Hashids\Facades\HashidsFacade::class
```

and run the following artisan command to publish the configuration should you want to make tweaks to it.

```bash
php artisan vendor:publish
```

This will create a file called `hashids.php` inside your `config` directory. This is where you can change the settings to your liking.

## Lumen

### Installation

Inside `bootstrap/app.php`, add the following line:

```php
$app->register(Nblackburn\Hashids\Providers\HashidsServiceProvider::class);
```
Then add the following to your `.env` file:

```ini
HASHIDS_SALT = YOURSECRETKEY
HASHIDS_LENGTH = 8
HASHIDS_ALPHABET = abcedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPAQRSTUVWXYZ1234567890
```

And you are done.

### Facade

To add facade support, firstly uncomment the following line within `bootstrap/app.php`:

```php
// $app->withFacades();
```

And then register the facade like so...

```php
class_alias(Nblackburn\Hashids\Facades\Hashids:class, 'Hashids');
```

## Settings

|name    |description                                 |default                                                        |
|--------|--------------------------------------------|---------------------------------------------------------------|
|salt    |The secret used for hashing.                |config('app.key')                                              |
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

If you find this wrapper to be useful, please consider [donating](https://payy.me/@nblackburn).

## License

This library is licensed under [MIT](http://choosealicense.com/licenses/mit), see [license.md](/license.md) for details.
