<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37a1026bf2dbfbf659b8afeead5333f8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37a1026bf2dbfbf659b8afeead5333f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37a1026bf2dbfbf659b8afeead5333f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37a1026bf2dbfbf659b8afeead5333f8::$classMap;

        }, null, ClassLoader::class);
    }
}
