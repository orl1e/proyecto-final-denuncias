<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit963ea6b88d5b09b0360d3db1cbbe1f42
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit963ea6b88d5b09b0360d3db1cbbe1f42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit963ea6b88d5b09b0360d3db1cbbe1f42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit963ea6b88d5b09b0360d3db1cbbe1f42::$classMap;

        }, null, ClassLoader::class);
    }
}
