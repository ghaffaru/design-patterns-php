<?php

namespace Ghaffarumudashiru\DesignPatterns\Tests\Creational\Singleton;

use Ghaffarumudashiru\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /** @test */
    public function new_instance_remains_the_same()
    {
        $first_instance = Singleton::getInstance();
        $second_instance = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $first_instance);
        $this->assertSame($first_instance, $second_instance);
    }
}