<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a9d7053ce427fa97d8ac79908645383
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
            'api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a9d7053ce427fa97d8ac79908645383::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a9d7053ce427fa97d8ac79908645383::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}