<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit926e1d01e941afe913b290b76ce0178e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tjslash\\CtoPageManager\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tjslash\\CtoPageManager\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit926e1d01e941afe913b290b76ce0178e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit926e1d01e941afe913b290b76ce0178e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit926e1d01e941afe913b290b76ce0178e::$classMap;

        }, null, ClassLoader::class);
    }
}
