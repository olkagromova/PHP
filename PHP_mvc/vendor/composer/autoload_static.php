<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85b9b704c3452d4a311c80601cd4210f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Routing\\' => 26,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85b9b704c3452d4a311c80601cd4210f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85b9b704c3452d4a311c80601cd4210f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85b9b704c3452d4a311c80601cd4210f::$classMap;

        }, null, ClassLoader::class);
    }
}
