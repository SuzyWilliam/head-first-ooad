<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fc467b60ee12dae89f8fb48239209fd
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fc467b60ee12dae89f8fb48239209fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fc467b60ee12dae89f8fb48239209fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fc467b60ee12dae89f8fb48239209fd::$classMap;

        }, null, ClassLoader::class);
    }
}