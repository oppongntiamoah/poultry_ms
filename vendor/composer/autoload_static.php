<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e552d4da11840c6cffc9f2f3a400969
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e552d4da11840c6cffc9f2f3a400969::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e552d4da11840c6cffc9f2f3a400969::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
