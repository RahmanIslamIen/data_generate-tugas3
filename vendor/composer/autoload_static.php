<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit121e885fe6c3f48b28f6f59e8306c09c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit121e885fe6c3f48b28f6f59e8306c09c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit121e885fe6c3f48b28f6f59e8306c09c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit121e885fe6c3f48b28f6f59e8306c09c::$classMap;

        }, null, ClassLoader::class);
    }
}
