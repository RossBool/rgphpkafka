<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\EndQuorumEpoch;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class EndQuorumEpochResponse extends AbstractResponse
{
    /**
 * The top level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The topic data.
 *
 * @var TopicData[]
 */
protected $topics = [];

/**
 * Endpoints for all leaders enumerated in PartitionData.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1], [1], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1], [1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [1], [1], [], [1], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 54;
}

public function getFlexibleVersions(): array
{
    return [1];
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
 * @return TopicData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicData[] $topics
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