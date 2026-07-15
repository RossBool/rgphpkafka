<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Vote;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class VoteRequest extends AbstractRequest
{
    /**
 * The cluster id.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The replica id of the voter receiving the request.
 *
 * @var int
 */
protected $voterId = -1;

/**
 * The topic data.
 *
 * @var TopicData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('voterId', 'int32', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 52;
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
public function getVoterId(): int
{
    return $this->voterId;
}

/**
 * @param int $voterId
 *
 * @return self
 */
public function setVoterId(int $voterId): self
{
    $this->voterId = $voterId;

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

}