<?php

namespace Jcergolj\InAppNotifications\Facades;

use Illuminate\Support\Facades\Facade;

class InAppNotification extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'in-app-notification';
    }
}
