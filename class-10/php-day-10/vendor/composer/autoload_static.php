<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite151cad29c190084bf81811f5b4e98bc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite151cad29c190084bf81811f5b4e98bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite151cad29c190084bf81811f5b4e98bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite151cad29c190084bf81811f5b4e98bc::$classMap;

        }, null, ClassLoader::class);
    }
}