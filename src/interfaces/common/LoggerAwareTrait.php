<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\common;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

use function is_null;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     */
    protected ?LoggerInterface $logger = null;

    /**
     * Sets a logger.
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Gets the logger from the internal property, then a possible local container, finally
     * defaulting to NullLogger if not set
     */
    public function getLogger(): LoggerInterface
    {
        if (!is_null($this->logger)) {
            return $this->logger;
        }

        // Attempt to populate with an available container
        if ($this instanceof ContainerAwareInterface) {
            $container = $this->getContainer();
            if (!is_null($container) && $container->has(LoggerInterface::class)) {
                /** @var LoggerInterface $logger */
                $logger = $container->get(LoggerInterface::class);

                if ($logger instanceof LoggerInterface) {
                    return $logger;
                }
            }
        }

        return new NullLogger();
    }
}
