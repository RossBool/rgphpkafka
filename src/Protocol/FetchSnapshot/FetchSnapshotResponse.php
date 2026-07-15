<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FetchSnapshot;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class FetchSnapshotResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The top level response error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The topics to fetch.
 *
 * @var TopicSnapshot[]
 */
protected $topics = [];

/**
 * Endpoints for all current-leaders enumerated in PartitionSnapshot.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('topics', TopicSnapshot::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [1], [0,1], [], [1], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 59;
}

public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return TopicSnapshot[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicSnapshot[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

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