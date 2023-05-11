<?php

namespace One23\LaravelMailDkim\Mail;

use Illuminate\Foundation\Application;
use Illuminate\Mail\MailServiceProvider as ServiceProvider;

class MailDkimServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('mail-dkim.php')
        ]);
    }

    protected function registerIlluminateMailer()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'mail-dkim'
        );

        $this->app->singleton('mail.manager', static function (Application $app) {
            return new MailManager($app);
        });

        $this->app->bind('mailer', static function (Application $app) {
            return $app->make('mail.manager')
                ->mailer();
        });
    }

}
