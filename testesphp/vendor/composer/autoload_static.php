<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita50aa7a4aac6a4ff483de5f21554c3ee
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita50aa7a4aac6a4ff483de5f21554c3ee::$classMap;

        }, null, ClassLoader::class);
    }
}
