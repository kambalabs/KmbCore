<?php
namespace KmbCoreTest;

require __DIR__ . '/AbstractBootstrap.php';

class Bootstrap extends AbstractBootstrap
{
    /**
     * Get the root path of the module.
     * Usually : dirname(dirname(__DIR__))
     *
     * @return string
     */
    public static function rootPath()
    {
        return dirname(dirname(__DIR__));
    }
}

Bootstrap::init();
Bootstrap::chroot();
