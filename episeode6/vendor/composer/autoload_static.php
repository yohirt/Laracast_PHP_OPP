<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf07aa9e1566870bdf8a13db4ac727fb8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf07aa9e1566870bdf8a13db4ac727fb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf07aa9e1566870bdf8a13db4ac727fb8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
