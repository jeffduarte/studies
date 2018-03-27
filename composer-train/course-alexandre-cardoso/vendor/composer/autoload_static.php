<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite72d5ee5477c541dc6dffd83010a66d7
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite72d5ee5477c541dc6dffd83010a66d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite72d5ee5477c541dc6dffd83010a66d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
