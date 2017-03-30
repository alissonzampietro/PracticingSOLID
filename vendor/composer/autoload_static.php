<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2610910f782d23b7480a6aeae83dadfe
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2610910f782d23b7480a6aeae83dadfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2610910f782d23b7480a6aeae83dadfe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}