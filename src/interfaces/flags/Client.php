<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\flags;

use OpenFeature\interfaces\common\ContainerAwareInterface;
use OpenFeature\interfaces\common\MetadataGetter;
use OpenFeature\interfaces\hooks\HooksAware;
use Psr\Log\LoggerAwareInterface;

/**
 * Interface used to resolve flags
 */
interface Client extends ContainerAwareInterface, EvaluationContextAware, FeatureDetails, FeatureValues, HooksAware, LoggerAwareInterface, MetadataGetter
{
}
