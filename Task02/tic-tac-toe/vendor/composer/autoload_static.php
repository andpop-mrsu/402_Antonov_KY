<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f5413c0f3043ac59da70303391db7bf
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '768cfb8f47f8a4ee665aeab221857d24' => __DIR__ . '/../..' . '/src/Controller.php',
        'e0b49d4619c294a4b8a612c0ab6f93da' => __DIR__ . '/../..' . '/src/View.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3f5413c0f3043ac59da70303391db7bf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
