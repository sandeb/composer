<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05187a72ed8cc3c8cb49198334ad39fe
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05187a72ed8cc3c8cb49198334ad39fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05187a72ed8cc3c8cb49198334ad39fe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit05187a72ed8cc3c8cb49198334ad39fe::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
