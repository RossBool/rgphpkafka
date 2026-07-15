<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FetchSnapshot;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class FetchSnapshotRequest extends AbstractRequest
{
    /**
 * The clusterId if known, this is used to validate metadata fetches prior to broker registration.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The broker ID of the follower.
 *
 * @var int
 */
protected $replicaId = -1;

/**
 * The maximum bytes to fetch from all of the snapshots.
 *
 * @var int
 */
protected $maxBytes = 0x7fffffff;

/**
 * The topics to fetch.
 *
 * @var TopicSnapshot[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('maxBytes', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('topics', TopicSnapshot::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0,1], [0,1], [0,1], [0,1], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 59;
}

public function getMaxSupportedVersion(): int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return int
 */
public function getMaxBytes(): int
{
    return $this->maxBytes;
}

/**
 * @param int $maxBytes
 *
 * @return self
 */
public function setMaxBytes(int $maxBytes): self
{
    $this->maxBytes = $maxBytes;

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

}