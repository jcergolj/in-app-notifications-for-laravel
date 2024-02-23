<?php

namespace Jcergolj\InAppNotifications;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Jcergolj\InAppNotifications\Facades\InAppNotification as FacadeInAppNotification;

class InAppNotificationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('in-app-notification', function () {
            return new InAppNotification();
        });
    }

    public function boot(): void
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('InAppNotification', FacadeInAppNotification::class);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/in-app-notifications'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'in-app-notifications');
    }
}
