<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita50aa7a4aac6a4ff483de5f21554c3ee
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita50aa7a4aac6a4ff483de5f21554c3ee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita50aa7a4aac6a4ff483de5f21554c3ee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita50aa7a4aac6a4ff483de5f21554c3ee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}