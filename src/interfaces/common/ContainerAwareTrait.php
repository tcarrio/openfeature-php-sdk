<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\common;

use Psr\Container\ContainerInterface;

/**
 * Basic Implementation of ContainerAwareInterface.
 */
trait ContainerAwareTrait
{
    /**
     * The Container instance.
     */
    protected ?ContainerInterface $container = null;

    /**
     * Sets a Container.
     */
    public function setContainer(?ContainerInterface $container): void
    {
        $this->container = $container;
    }

    /**
     * Gets the Container, defaulting to NullContainer if not set
     */
    public function getContainer(): ?ContainerInterface
    {
        return $this->container;
    }
}
