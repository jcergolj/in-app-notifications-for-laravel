<?php

namespace Jcergolj\InAppNotifications;

use Illuminate\Support\Traits\Macroable;

class InAppNotification
{
    use Macroable;

    const SUCCESS = 'success';

    const ERROR = 'error';

    const INFO = 'info';

    const WARNING = 'warning';

    public function __construct(public int $timeout = 5000)
    {
    }

    public function success(string $message): void
    {
        session()->put('flash', ['message' => $message, 'level' => self::SUCCESS]);
    }

    public function error(string $message): void
    {
        session()->put('flash', ['message' => $message, 'level' => self::ERROR]);
    }

    public function info(string $message): void
    {
        session()->put('flash', ['message' => $message, 'level' => self::INFO]);
    }

    public function warning(string $message): void
    {
        session()->put('flash', ['message' => $message, 'level' => self::WARNING]);
    }

    public function hasMessage(): bool
    {
        return session()->has('flash');
    }

    public function print(): string
    {
        return session()->pull('flash')['message'];
    }

    public function isError(): bool
    {
        return session()->get('flash')['level'] === self::ERROR;
    }

    public function isSuccess(): bool
    {
        return session()->get('flash')['level'] === self::SUCCESS;
    }

    public function isWarning(): bool
    {
        return session()->get('flash')['level'] === self::WARNING;
    }

    public function isInfo(): bool
    {
        return session()->get('flash')['level'] === self::INFO;
    }

    public function timeout(): int
    {
        return $this->timeout;
    }

    public function fake(): void
    {
        InAppNotification::mixin(new InAppNotificationTestMacro());
    }
}
