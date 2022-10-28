<?php

namespace Ghaffarumudashiru\DesignPatterns\Tests\Creational\Singleton;

use Ghaffarumudashiru\DesignPatterns\Creational\Singleton\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    /** @test */
    public function itLogsUsingASingleLoggerInstance()
    {
        $logger1 = Logger::getInstance();
        $logger2 = Logger::getInstance();

        $this->assertSame($logger1, $logger2);
    }
}