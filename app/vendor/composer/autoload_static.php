<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9705117d847521f974dfce10c97362f2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9705117d847521f974dfce10c97362f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9705117d847521f974dfce10c97362f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9705117d847521f974dfce10c97362f2::$classMap;

        }, null, ClassLoader::class);
    }
}
