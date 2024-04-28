<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29b5a0c75aee1bf2c2fde20c6b8b1a1c
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ulteriorti\\Digitalcep\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ulteriorti\\Digitalcep\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit29b5a0c75aee1bf2c2fde20c6b8b1a1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29b5a0c75aee1bf2c2fde20c6b8b1a1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29b5a0c75aee1bf2c2fde20c6b8b1a1c::$classMap;

        }, null, ClassLoader::class);
    }
}