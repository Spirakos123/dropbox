<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit614ed201b7d83228d15abb4c5b386753
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dropbox' => 
            array (
                0 => __DIR__ . '/..' . '/dropbox/dropbox-sdk/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit614ed201b7d83228d15abb4c5b386753::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}