# Hashids

A hashids wrapper for Laravel 5+.

![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat-square) ![Dependancies](https://img.shields.io/badge/dependancies-1-green.svg?style=flat-square)

## Installation

Inside config/app.php add the following line in your providers

```php
Nblackburn\Hashids\Providers\HashidsServiceProvider::class
```

secondly, add the following line to your aliases

```php
Nblackburn\Hashids\Facades\HashidsFacade::class
```

and finally, run the following artisan command to publish the configuration should you want to make tweaks to it.

```bash
php artisan vendor:publish
```

This will create a file called `hashids.php` inside your `config` directory. This is where you can change the settings to your liking.

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
