<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fc467b60ee12dae89f8fb48239209fd
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        'c4e03ecd470d2a87804979c0a8152284' => __DIR__ . '/..' . '/react/async/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Async\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Async\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/async/src',
        ),
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
