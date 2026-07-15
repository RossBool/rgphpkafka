<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeCluster;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeClusterRequest extends AbstractRequest
{
    /**
 * Whether to include cluster authorized operations.
 *
 * @var bool
 */
protected $includeClusterAuthorizedOperations = false;

/**
 * The endpoint type to describe. 1=brokers, 2=controllers.
 *
 * @var int
 */
protected $endpointType = 1;

/**
 * Whether to include fenced brokers when listing brokers.
 *
 * @var bool
 */
protected $includeFencedBrokers = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('includeClusterAuthorizedOperations', 'bool', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('endpointType', 'int8', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('includeFencedBrokers', 'bool', false, [2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 60;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return bool
 */
public function getIncludeClusterAuthorizedOperations(): bool
{
    return $this->includeClusterAuthorizedOperations;
}

/**
 * @param bool $includeClusterAuthorizedOperations
 *
 * @return self
 */
public function setIncludeClusterAuthorizedOperations(bool $includeClusterAuthorizedOperations): self
{
    $this->includeClusterAuthorizedOperations = $includeClusterAuthorizedOperations;

    return $this;
}
/**
 * @return int
 */
public function getEndpointType(): int
{
    return $this->endpointType;
}

/**
 * @param int $endpointType
 *
 * @return self
 */
public function setEndpointType(int $endpointType): self
{
    $this->endpointType = $endpointType;

    return $this;
}
/**
 * @return bool
 */
public function getIncludeFencedBrokers(): bool
{
    return $this->includeFencedBrokers;
}

/**
 * @param bool $includeFencedBrokers
 *
 * @return self
 */
public function setIncludeFencedBrokers(bool $includeFencedBrokers): self
{
    $this->includeFencedBrokers = $includeFencedBrokers;

    return $this;
}

}