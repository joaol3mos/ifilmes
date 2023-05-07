<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited754f349a4e4f260755be80d2f05ade
{
    public static $files = array (
        'd3d8d294d8d967449193479d88ce8e26' => __DIR__ . '/../..' . '/source/Boot/Config.php',
        '28348a214121d57f03a27109136d52d5' => __DIR__ . '/../..' . '/source/Boot/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited754f349a4e4f260755be80d2f05ade::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited754f349a4e4f260755be80d2f05ade::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited754f349a4e4f260755be80d2f05ade::$classMap;

        }, null, ClassLoader::class);
    }
}