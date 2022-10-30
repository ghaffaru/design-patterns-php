<?php

namespace Ghaffarumudashiru\DesignPatterns\Structural\DependencyInjection;

class DatabaseConfiguration
{
    public function __construct(
        private string $host,
        private int $port,
        private string $username,
        private string $password
    ){

    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

}