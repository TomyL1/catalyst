<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a7f20acc4a040d7aec11a031bf8d445
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a7f20acc4a040d7aec11a031bf8d445::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a7f20acc4a040d7aec11a031bf8d445::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a7f20acc4a040d7aec11a031bf8d445::$classMap;

        }, null, ClassLoader::class);
    }
}
