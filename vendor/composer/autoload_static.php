<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9a6b761646980fd623e4ade3c288127
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Muhaiminshihab\\Ctaroutes\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Muhaiminshihab\\Ctaroutes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9a6b761646980fd623e4ade3c288127::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9a6b761646980fd623e4ade3c288127::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9a6b761646980fd623e4ade3c288127::$classMap;

        }, null, ClassLoader::class);
    }
}