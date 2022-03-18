<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit582f46e0f616498abe021354cad4ca5e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Athavands\\Contact\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Athavands\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit582f46e0f616498abe021354cad4ca5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit582f46e0f616498abe021354cad4ca5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit582f46e0f616498abe021354cad4ca5e::$classMap;

        }, null, ClassLoader::class);
    }
}