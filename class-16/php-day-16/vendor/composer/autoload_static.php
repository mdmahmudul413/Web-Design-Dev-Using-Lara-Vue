<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02000e66c1e01609b6e6ac9528c96541
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit02000e66c1e01609b6e6ac9528c96541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02000e66c1e01609b6e6ac9528c96541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02000e66c1e01609b6e6ac9528c96541::$classMap;

        }, null, ClassLoader::class);
    }
}