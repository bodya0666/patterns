<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35cae66925d108f92163e7c1ba533329
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35cae66925d108f92163e7c1ba533329::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35cae66925d108f92163e7c1ba533329::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
