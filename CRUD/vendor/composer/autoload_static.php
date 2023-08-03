<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30044a61272b56a9ed30b9905a29e9dc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30044a61272b56a9ed30b9905a29e9dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30044a61272b56a9ed30b9905a29e9dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30044a61272b56a9ed30b9905a29e9dc::$classMap;

        }, null, ClassLoader::class);
    }
}