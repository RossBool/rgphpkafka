<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ProduceResponse extends AbstractResponse
{
    /**
 * Each produce response.
 *
 * @var TopicProduceResponse[]
 */
protected $responses = [];

/**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * Endpoints for all current-leaders enumerated in PartitionProduceResponses, with errors NOT_LEADER_OR_FOLLOWER.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('responses', TopicProduceResponse::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [10,11,12], [9,10,11,12], [], [10,11,12], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [9,10,11,12];
}


    /**
 * @return TopicProduceResponse[]
 */
public function getResponses(): array
{
    return $this->responses;
}

/**
 * @param TopicProduceResponse[] $responses
 *
 * @return self
 */
public function setResponses(array $responses): self
{
    $this->responses = $responses;

    return $this;
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
 * @return NodeEndpoint[]
 */
public function getNodeEndpoints(): array
{
    return $this->nodeEndpoints;
}

/**
 * @param NodeEndpoint[] $nodeEndpoints
 *
 * @return self
 */
public function setNodeEndpoints(array $nodeEndpoints): self
{
    $this->nodeEndpoints = $nodeEndpoints;

    return $this;
}

}