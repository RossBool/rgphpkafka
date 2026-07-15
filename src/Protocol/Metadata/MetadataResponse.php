<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Metadata;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class MetadataResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * A list of brokers present in the cluster.
 *
 * @var MetadataResponseBroker[]
 */
protected $brokers = [];

/**
 * The cluster ID that responding broker belongs to.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The ID of the controller broker.
 *
 * @var int
 */
protected $controllerId = -1;

/**
 * Each topic in the response.
 *
 * @var MetadataResponseTopic[]
 */
protected $topics = [];

/**
 * 32-bit bitfield to represent authorized operations for this cluster.
 *
 * @var int
 */
protected $clusterAuthorizedOperations = -2147483648;

/**
 * The top-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('brokers', MetadataResponseBroker::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('clusterId', 'string', false, [2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [2,3,4,5,6,7,8,9,10,11,12,13], [], null),
new ProtocolField('controllerId', 'int32', false, [1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('topics', MetadataResponseTopic::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('clusterAuthorizedOperations', 'int32', false, [8,9,10], [9,10,11,12,13], [], [], null),
new ProtocolField('errorCode', 'int16', false, [13], [9,10,11,12,13], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 3;
}

public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
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
 * @return MetadataResponseBroker[]
 */
public function getBrokers(): array
{
    return $this->brokers;
}

/**
 * @param MetadataResponseBroker[] $brokers
 *
 * @return self
 */
public function setBrokers(array $brokers): self
{
    $this->brokers = $brokers;

    return $this;
}
/**
 * @return string|null
 */
public function getClusterId(): ?string
{
    return $this->clusterId;
}

/**
 * @param string|null $clusterId
 *
 * @return self
 */
public function setClusterId(?string $clusterId): self
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
 * @return MetadataResponseTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param MetadataResponseTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

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

}