<?php

namespace Ghaffarumudashiru\DesignPatterns\Creational\Singleton;
use Exception;

class Singleton
{
    private static $instances = null;

    public static function getInstance(): ?Singleton
    {
        $subClass = static::class;

        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static();
        }

        return self::$instances[$subClass];
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