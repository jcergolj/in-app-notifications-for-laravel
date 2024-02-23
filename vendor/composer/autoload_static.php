<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7498346b29e1227c4c34b66ee9b9e837
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jcergolj\\InAppNotifications\\' => 28,
        ),
        'D' => 
        array (
            'Database\\Seeders\\' => 17,
            'Database\\Factories\\' => 19,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jcergolj\\InAppNotifications\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/pint/database/seeders',
        ),
        'Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/pint/database/factories',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/pint/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7498346b29e1227c4c34b66ee9b9e837::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7498346b29e1227c4c34b66ee9b9e837::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7498346b29e1227c4c34b66ee9b9e837::$classMap;

        }, null, ClassLoader::class);
    }
}