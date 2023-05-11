# DKIM support into Laravel Mail

Add DKIM support for Laravel MailServiceProvider

## Install

Via Composer

``` bash
$ composer require one23/laravel-mail-dkim
```

Replace default `MailServiceProvider` to `\One23\LaravelMailDkim\Mail\MailDkimServiceProvider` in `config/app.php`

```php
...
'providers' => ServiceProvider::defaultProviders()
    ->replace([
        \Illuminate\Mail\MailServiceProvider::class => One23\LaravelMailDkim\Mail\MailDkimServiceProvider::class,
    ])
...
```

### Publish configuration in Laravel

```shell
php artisan vendor:publish --provider="One23\LaravelMailDkim\Mail\MailDkimServiceProvider"
```

## Configuration

Edit file `.env`

```dotenv
DKIM_ENABLE={bool}false
DKIM_DOMAIN={string}"..."
DKIM_SELECTOR={string}"default"
DKIM_PRIVATE_KEY={string}"..."
DKIM_PASSPHRASE={string}""
DKIM_ALGORITHM={string}"rsa-sha256"
DKIM_IDENTITY={string|null}null
```

## Security

If you discover any security related issues, please email eugene@krivoruchko.info instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
