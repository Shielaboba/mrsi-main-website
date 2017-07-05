<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD:dixiePHPTutorial/ojt/vendor/composer/autoload_real.php
class ComposerAutoloaderInitba0654d4a335bf4272cdcea639dc2bfb
=======
class ComposerAutoloaderInite524cb83b272c1381817f2380307d5f2
>>>>>>> dc6c185d7f6a62b670221688dbef082be1b9aac8:ojt/vendor/composer/autoload_real.php
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD:dixiePHPTutorial/ojt/vendor/composer/autoload_real.php
        spl_autoload_register(array('ComposerAutoloaderInitba0654d4a335bf4272cdcea639dc2bfb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitba0654d4a335bf4272cdcea639dc2bfb', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInite524cb83b272c1381817f2380307d5f2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInite524cb83b272c1381817f2380307d5f2', 'loadClassLoader'));
>>>>>>> dc6c185d7f6a62b670221688dbef082be1b9aac8:ojt/vendor/composer/autoload_real.php

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD:dixiePHPTutorial/ojt/vendor/composer/autoload_real.php
            call_user_func(\Composer\Autoload\ComposerStaticInitba0654d4a335bf4272cdcea639dc2bfb::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInite524cb83b272c1381817f2380307d5f2::getInitializer($loader));
>>>>>>> dc6c185d7f6a62b670221688dbef082be1b9aac8:ojt/vendor/composer/autoload_real.php
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        return $loader;
    }
}
