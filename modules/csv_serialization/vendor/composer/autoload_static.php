<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit973db3620fd9382f8a0c43576f5c81b2
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit973db3620fd9382f8a0c43576f5c81b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit973db3620fd9382f8a0c43576f5c81b2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}