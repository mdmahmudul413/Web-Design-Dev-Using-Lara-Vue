<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c5f7400d6ee3e529365452b8cf617fe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c5f7400d6ee3e529365452b8cf617fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c5f7400d6ee3e529365452b8cf617fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c5f7400d6ee3e529365452b8cf617fe::$classMap;

        }, null, ClassLoader::class);
    }
}