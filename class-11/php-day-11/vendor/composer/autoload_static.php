<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7b2f7138935463751fb34fbfebe1af9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7b2f7138935463751fb34fbfebe1af9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7b2f7138935463751fb34fbfebe1af9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7b2f7138935463751fb34fbfebe1af9::$classMap;

        }, null, ClassLoader::class);
    }
}
