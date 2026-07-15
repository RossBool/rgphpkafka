<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Vote;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class VoteResponse extends AbstractResponse
{
    /**
 * The top level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The results for each topic.
 *
 * @var TopicData[]
 */
protected $topics = [];

/**
 * Endpoints for all current-leaders enumerated in PartitionData.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [1,2], [0,1,2], [], [1,2], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 52;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
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