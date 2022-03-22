<?php

namespace Athavands\Contact;
use Carbon\Laravel\ServiceProvider;
class ContactServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadViewsFrom(__DIR__.'/views', 'storage');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );
        $this->publishes([
            // __DIR__.'/config/contact.php' => config_path('contact.php')
            // __DIR__.'/views' => resource_path('views'),
            // __DIR__.'/views' => resource_path('views'),

        ]);
    }

    public function register()
    {
        // include __DIR__.'/routes/web.php';
    }


}
