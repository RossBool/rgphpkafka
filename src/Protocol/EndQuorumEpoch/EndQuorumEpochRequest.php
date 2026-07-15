<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\EndQuorumEpoch;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class EndQuorumEpochRequest extends AbstractRequest
{
    /**
 * The cluster id.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The topics.
 *
 * @var TopicData[]
 */
protected $topics = [];

/**
 * Endpoints for the leader.
 *
 * @var LeaderEndpoint[]
 */
protected $leaderEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0,1], [1], [0,1], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1], [1], [], [], null),
new ProtocolField('leaderEndpoints', LeaderEndpoint::class, true, [1], [1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 54;
}

public function getMaxSupportedVersion(): int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [1];
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
 * @return LeaderEndpoint[]
 */
public function getLeaderEndpoints(): array
{
    return $this->leaderEndpoints;
}

/**
 * @param LeaderEndpoint[] $leaderEndpoints
 *
 * @return self
 */
public function setLeaderEndpoints(array $leaderEndpoints): self
{
    $this->leaderEndpoints = $leaderEndpoints;

    return $this;
}

}