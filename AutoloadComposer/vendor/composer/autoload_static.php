<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite374822b5e67b86e615848c4bf4094ac
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite374822b5e67b86e615848c4bf4094ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite374822b5e67b86e615848c4bf4094ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
