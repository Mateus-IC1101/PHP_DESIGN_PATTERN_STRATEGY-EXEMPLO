<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3d7b7a03062c229aaacfb2510a76e05
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Teste\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Teste\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3d7b7a03062c229aaacfb2510a76e05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3d7b7a03062c229aaacfb2510a76e05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3d7b7a03062c229aaacfb2510a76e05::$classMap;

        }, null, ClassLoader::class);
    }
}
