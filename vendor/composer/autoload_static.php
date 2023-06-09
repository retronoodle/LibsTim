<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75a89f5ac3382d4f21c757cb0b99b54e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tsmon\\LibsTim\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tsmon\\LibsTim\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75a89f5ac3382d4f21c757cb0b99b54e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75a89f5ac3382d4f21c757cb0b99b54e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75a89f5ac3382d4f21c757cb0b99b54e::$classMap;

        }, null, ClassLoader::class);
    }
}
