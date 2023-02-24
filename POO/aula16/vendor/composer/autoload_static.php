<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce8f36ea59047ce7fe56a83fc9935f60
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce8f36ea59047ce7fe56a83fc9935f60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce8f36ea59047ce7fe56a83fc9935f60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce8f36ea59047ce7fe56a83fc9935f60::$classMap;

        }, null, ClassLoader::class);
    }
}