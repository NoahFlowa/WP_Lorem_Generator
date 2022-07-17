<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit336760c32743839b5dd64d66b8056f31
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit336760c32743839b5dd64d66b8056f31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit336760c32743839b5dd64d66b8056f31::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit336760c32743839b5dd64d66b8056f31::$classMap;

        }, null, ClassLoader::class);
    }
}