# In-App Notifications for Laravel - Elegant & Customizable Alerts

<img src="images/screenshot.png" alt="Package for displaying in app notifications for Laravel" height="100px">

## Key features
- notification is closed automatically after 5s,
- you can change the timeout,
- styled wiht tailwind css by default,
- you can modify the component and use different framework or none at all

## Installation

### Requirements
Required PHP >=8.2

### Installing package
```bash
composer require jcergolj/in-app-notifications-for-laravel
```

### Publishing config file
If you wish to modify the component view
```bash
php artisan vendor:publish --provider="Jcergolj\InAppNotifications\InAppNotificationsServiceProvider"
```

## Usage

### Add components to your layouts/app.blade.php file
```html
    <x-in-app-notifications::notification />

    @yield('scripts')
```

### Set notification inside controller
```php
<?php

namespace App\Http\Controllers;

use Jcergolj\InAppNotifications\Facades\InAppNotification;

class UserController extends Controller
{
    public function store(Request $request)
    {
        InAppNotification::success('User was successfully created.');

        return view('mailboxes.index');
    }
}
```

## Avaiable methods
```php
<?php

InAppNotification::success($message);

InAppNotification::error($message);

InAppNotification::warning($message);

InAppNotification::info($message);
```

## Change the default timeout
Inside register's AppServiceProvider.php file
```php
<?php

public function register(): void
{
    $this->app->bind('in-app-notification', function () {
        return new Jcergolj\InAppNotifications\InAppNotification(10000); // 10 seconds
    });
}
```
