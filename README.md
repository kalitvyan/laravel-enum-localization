# Laravel Enums with Localization

This package helps to working with Enums and its values (aka Backed enums) when you need different languages to use.
It includes an artisan command to generate Enum.

## Installation

```bash
composer require kalitvyan/laravel-enum-localization
```

## Usage

To generate a new Enum run the following artisan command:

```bash
php artisan make:enum MyEnum
```

It will generate the following enum: `app/Enums/MyEnum.php`.

## Testing

To run the test suite:

```bash
composer test
```

## Credits

- [Kostya Kalitvyansky](https://github.com/kalitvyan)
- [All Contributors](../../contributors)

## LICENSE

The MIT License (MIT). Please see [License File](./LICENSE) for more information.
