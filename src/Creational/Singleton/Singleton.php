<?php

namespace Ghaffarumudashiru\DesignPatterns\Creational\Singleton;
use Exception;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): ?Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * not allowed to call this outside the class, getInstance method should be called instead
     */
    private function __construct()
    {

    }

    /**
     * prevent from being clone, cos this will create a new instance
     */
    private function __clone()
    {

    }

    /**
     * prevent from being unserialized
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}