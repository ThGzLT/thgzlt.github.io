<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit432270f0f53e6d1a56c98b54db916526
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit432270f0f53e6d1a56c98b54db916526::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit432270f0f53e6d1a56c98b54db916526::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit432270f0f53e6d1a56c98b54db916526::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
