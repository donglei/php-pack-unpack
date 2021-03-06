<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b8f9a8899d3d80bc617d61d50cd0ccd
{
    public static $files = array (
        '7c623dc93c03ddd466695ebe6517b393' => __DIR__ . '/..' . '/google/protobuf/php/src/Google/Protobuf/descriptor.php',
        '06b74932286ac92d836b3e28eabc24ef' => __DIR__ . '/..' . '/google/protobuf/php/src/Google/Protobuf/descriptor_internal.pb.php',
        '98ed4286eec71fc8351580d3f0b2f653' => __DIR__ . '/..' . '/google/protobuf/php/src/Google/Protobuf/Internal/Type.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Google\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/php/src/Google',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b8f9a8899d3d80bc617d61d50cd0ccd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b8f9a8899d3d80bc617d61d50cd0ccd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
