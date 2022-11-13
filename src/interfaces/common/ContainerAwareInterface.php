<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\common;

use Psr\Container\ContainerInterface;

interface ContainerAwareInterface
{
    public function setContainer(?ContainerInterface $container): void;

    public function getContainer(): ?ContainerInterface;
}
