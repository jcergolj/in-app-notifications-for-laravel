<?php

namespace Jcergolj\InAppNotifications;

use PHPUnit\Framework\Assert;

class InAppNotificationTestMacro
{
    public function assertSet()
    {
        return function ($message = null) {
            Assert::assertTrue(InAppNotification::hasMessage(), 'In app notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app notification message is not the same as expected.');
            }

            return $this;
            Assert::assertTrue(InAppNotification::isWarning(), 'In app notification is not an warning message.');

            Assert::assertTrue(InAppNotification::hasMessage(), 'In app warning notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app warning notification message is not the same as expected.');
            }

            return $this;
        };
    }

    public function assertError()
    {
        return function ($message = null) {
            Assert::assertTrue(InAppNotification::isError(), 'In app notification is not an error message.');

            Assert::assertTrue(InAppNotification::hasMessage(), 'In app error notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app error notification message is not the same as expected.');
            }

            return $this;
        };
    }

    public function assertSuccess()
    {
        return function ($message = null) {
            Assert::assertTrue(InAppNotification::isSuccess(), 'In app notification is not a success message.');

            Assert::assertTrue(InAppNotification::hasMessage(), 'In app succcess notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app success notification message is not the same as expected.');
            }

            return $this;
        };
    }

    public function assertInfo()
    {
        return function ($message = null) {
            Assert::assertTrue(InAppNotification::isInfo(), 'In app notification is not an info message.');

            Assert::assertTrue(InAppNotification::hasMessage(), 'In app info notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app info notification message is not the same as expected.');
            }

            return $this;
        };
    }

    public function assertWarning()
    {
        return function ($message = null) {
            Assert::assertTrue(InAppNotification::isWarning(), 'In app notification is not an warning message.');

            Assert::assertTrue(InAppNotification::hasMessage(), 'In app warning notification is not set.');

            if ($message !== null) {
                Assert::assertSame(InAppNotification::print(), $message, 'In app warning notification message is not the same as expected.');
            }

            return $this;
        };
    }

    public function assertTimeout()
    {
        return function ($timeout) {

            Assert::assertSame(InAppNotification::timeout(), $timeout, 'In app timeout is is not the same as expected.');

            return $this;
        };
    }
}
