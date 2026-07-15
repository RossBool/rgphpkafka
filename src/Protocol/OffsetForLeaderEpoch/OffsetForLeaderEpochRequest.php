<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetForLeaderEpoch;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetForLeaderEpochRequest extends AbstractRequest
{
    /**
 * The broker ID of the follower, of -1 if this request is from a consumer.
 *
 * @var int
 */
protected $replicaId = -2;

/**
 * Each topic to get offsets for.
 *
 * @var OffsetForLeaderTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [3,4], [4], [], [], null),
new ProtocolField('topics', OffsetForLeaderTopic::class, true, [0,1,2,3,4], [4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 23;
}

public function getMaxSupportedVersion(): int
{
    return 4;
}

public function getFlexibleVersions(): array
{
    return [4];
}


    /**
 * @return int
 */
public function getReplicaId(): int
{
    return $this->replicaId;
}

/**
 * @param int $replicaId
 *
 * @return self
 */
public function setReplicaId(int $replicaId): self
{
    $this->replicaId = $replicaId;

    return $this;
}
/**
 * @return OffsetForLeaderTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param OffsetForLeaderTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}