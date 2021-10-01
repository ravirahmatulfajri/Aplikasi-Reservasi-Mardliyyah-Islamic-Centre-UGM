<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97db1b3dec4b848c77657f91d031525c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97db1b3dec4b848c77657f91d031525c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97db1b3dec4b848c77657f91d031525c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97db1b3dec4b848c77657f91d031525c::$classMap;

        }, null, ClassLoader::class);
    }
}