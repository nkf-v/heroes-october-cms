<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31525ebac1806019918e01cef082d535
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\ClassLoader\\' => 30,
        ),
        'B' => 
        array (
            'Barryvdh\\LaravelIdeHelper\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\ClassLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/class-loader',
        ),
        'Barryvdh\\LaravelIdeHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/barryvdh/laravel-ide-helper/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Barryvdh' => 
            array (
                0 => __DIR__ . '/..' . '/barryvdh/reflection-docblock/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31525ebac1806019918e01cef082d535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31525ebac1806019918e01cef082d535::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit31525ebac1806019918e01cef082d535::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
