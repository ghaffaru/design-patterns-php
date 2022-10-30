<?php

namespace Ghaffarumudashiru\DesignPatterns\Tests\Structural\DependencyInjection;

use Ghaffarumudashiru\DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use Ghaffarumudashiru\DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
    /** @test */
    public function canGetConfigurationByDI()
    {
        $config = new DatabaseConfiguration('localhost', '3306', 'ghaff', '12345678');
        $connection = new DatabaseConnection($config);

        $this->assertSame('ghaff:12345678@localhost:3306', $connection->getDsn());
    }
}