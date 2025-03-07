<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit454bf29db494caca70bb1b68e5a4365b
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wesle\\Ex033\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wesle\\Ex033\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit454bf29db494caca70bb1b68e5a4365b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit454bf29db494caca70bb1b68e5a4365b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit454bf29db494caca70bb1b68e5a4365b::$classMap;

        }, null, ClassLoader::class);
    }
}
