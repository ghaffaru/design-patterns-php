<?php

namespace Ghaffarumudashiru\DesignPatterns\Structural\DependencyInjection;

class DatabaseConnection
{
    public function __construct(private DatabaseConfiguration $configuration)
    {

    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}