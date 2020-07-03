<?php

namespace Digibytes\Pickup;

use Illuminate\Support\ServiceProvider;

class PickupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'pickup');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pickup');
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/system.php', 'core');
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/carriers.php', 'carriers');
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/admin-menu.php', 'menu.admin');
    }
}
