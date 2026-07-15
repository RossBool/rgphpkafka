<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeCluster;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeClusterResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The top-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The top-level error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The endpoint type that was described. 1=brokers, 2=controllers.
 *
 * @var int
 */
protected $endpointType = 1;

/**
 * The cluster ID that responding broker belongs to.
 *
 * @var string
 */
protected $clusterId = '';

/**
 * The ID of the controller. When handled by a controller, returns the current voter leader ID. When handled by a broker, returns a random alive broker ID as a fallback.
 *
 * @var int
 */
protected $controllerId = -1;

/**
 * Each broker in the response.
 *
 * @var DescribeClusterBroker[]
 */
protected $brokers = [];

/**
 * 32-bit bitfield to represent authorized operations for this cluster.
 *
 * @var int
 */
protected $clusterAuthorizedOperations = -2147483648;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('endpointType', 'int8', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('clusterId', 'string', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('controllerId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('brokers', DescribeClusterBroker::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('clusterAuthorizedOperations', 'int32', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 60;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

    return $this;
}
/**
 * @return int
 */
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
}
/**
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

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
 * @return string
 */
public function getClusterId(): string
{
    return $this->clusterId;
}

/**
 * @param string $clusterId
 *
 * @return self
 */
public function setClusterId(string $clusterId): self
{
    $this->clusterId = $clusterId;

    return $this;
}
/**
 * @return int
 */
public function getControllerId(): int
{
    return $this->controllerId;
}

/**
 * @param int $controllerId
 *
 * @return self
 */
public function setControllerId(int $controllerId): self
{
    $this->controllerId = $controllerId;

    return $this;
}
/**
 * @return DescribeClusterBroker[]
 */
public function getBrokers(): array
{
    return $this->brokers;
}

/**
 * @param DescribeClusterBroker[] $brokers
 *
 * @return self
 */
public function setBrokers(array $brokers): self
{
    $this->brokers = $brokers;

    return $this;
}
/**
 * @return int
 */
public function getClusterAuthorizedOperations(): int
{
    return $this->clusterAuthorizedOperations;
}

/**
 * @param int $clusterAuthorizedOperations
 *
 * @return self
 */
public function setClusterAuthorizedOperations(int $clusterAuthorizedOperations): self
{
    $this->clusterAuthorizedOperations = $clusterAuthorizedOperations;

    return $this;
}

}