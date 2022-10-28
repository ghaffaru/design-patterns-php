<?php

namespace Ghaffarumudashiru\DesignPatterns\Creational\Singleton;

class Logger extends Singleton
{
    private $fileHandle;

    protected function __construct()
    {
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    /**
     * write log entry to the opened resource
     * @void
     */
    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message\n");
    }

    /**
     *
     */
    public static function log($message)
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }

}