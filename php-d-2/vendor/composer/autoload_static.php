<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7164dc41d3ce8bb865b6aca80dcfdab9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpD2\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpD2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7164dc41d3ce8bb865b6aca80dcfdab9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7164dc41d3ce8bb865b6aca80dcfdab9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7164dc41d3ce8bb865b6aca80dcfdab9::$classMap;

        }, null, ClassLoader::class);
    }
}
