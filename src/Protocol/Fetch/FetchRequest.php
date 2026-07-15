<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class FetchRequest extends AbstractRequest
{
    /**
 * The clusterId if known. This is used to validate metadata fetches prior to broker registration.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The broker ID of the follower, of -1 if this request is from a consumer.
 *
 * @var int
 */
protected $replicaId = -1;

/**
 * The state of the replica in the follower.
 *
 * @var ReplicaState
 */
protected $replicaState = null;

/**
 * The maximum time in milliseconds to wait for the response.
 *
 * @var int
 */
protected $maxWaitMs = 0;

/**
 * The minimum bytes to accumulate in the response.
 *
 * @var int
 */
protected $minBytes = 0;

/**
 * The maximum bytes to fetch.  See KIP-74 for cases where this limit may not be honored.
 *
 * @var int
 */
protected $maxBytes = 0x7fffffff;

/**
 * This setting controls the visibility of transactional records. Using READ_UNCOMMITTED (isolation_level = 0) makes all records visible. With READ_COMMITTED (isolation_level = 1), non-transactional and COMMITTED transactional records are visible. To be more concrete, READ_COMMITTED returns all data from offsets smaller than the current LSO (last stable offset), and enables the inclusion of the list of aborted transactions in the result, which allows consumers to discard ABORTED transactional records.
 *
 * @var int
 */
protected $isolationLevel = 0;

/**
 * The fetch session ID.
 *
 * @var int
 */
protected $sessionId = 0;

/**
 * The fetch session epoch, which is used for ordering requests in a session.
 *
 * @var int
 */
protected $sessionEpoch = -1;

/**
 * The topics to fetch.
 *
 * @var FetchTopic[]
 */
protected $topics = [];

/**
 * In an incremental fetch request, the partitions to remove.
 *
 * @var ForgottenTopic[]
 */
protected $forgottenTopicsData = [];

/**
 * Rack ID of the consumer making this request.
 *
 * @var string
 */
protected $rackId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('maxWaitMs', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('minBytes', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('maxBytes', 'int32', false, [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('isolationLevel', 'int8', false, [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('sessionId', 'int32', false, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('sessionEpoch', 'int32', false, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('topics', FetchTopic::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('forgottenTopicsData', ForgottenTopic::class, true, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('rackId', 'string', false, [11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('clusterId', 'string', false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], 0),
new ProtocolField('replicaState', ReplicaState::class, false, [15,16,17,18], [12,13,14,15,16,17,18], [], [15,16,17,18], 1),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 1;
}

public function getMaxSupportedVersion(): int
{
    return 18;
}

public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
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
 * @return ReplicaState
 */
public function getReplicaState(): ReplicaState
{
    return $this->replicaState;
}

/**
 * @param ReplicaState $replicaState
 *
 * @return self
 */
public function setReplicaState(ReplicaState $replicaState): self
{
    $this->replicaState = $replicaState;

    return $this;
}
/**
 * @return int
 */
public function getMaxWaitMs(): int
{
    return $this->maxWaitMs;
}

/**
 * @param int $maxWaitMs
 *
 * @return self
 */
public function setMaxWaitMs(int $maxWaitMs): self
{
    $this->maxWaitMs = $maxWaitMs;

    return $this;
}
/**
 * @return int
 */
public function getMinBytes(): int
{
    return $this->minBytes;
}

/**
 * @param int $minBytes
 *
 * @return self
 */
public function setMinBytes(int $minBytes): self
{
    $this->minBytes = $minBytes;

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
 * @return int
 */
public function getIsolationLevel(): int
{
    return $this->isolationLevel;
}

/**
 * @param int $isolationLevel
 *
 * @return self
 */
public function setIsolationLevel(int $isolationLevel): self
{
    $this->isolationLevel = $isolationLevel;

    return $this;
}
/**
 * @return int
 */
public function getSessionId(): int
{
    return $this->sessionId;
}

/**
 * @param int $sessionId
 *
 * @return self
 */
public function setSessionId(int $sessionId): self
{
    $this->sessionId = $sessionId;

    return $this;
}
/**
 * @return int
 */
public function getSessionEpoch(): int
{
    return $this->sessionEpoch;
}

/**
 * @param int $sessionEpoch
 *
 * @return self
 */
public function setSessionEpoch(int $sessionEpoch): self
{
    $this->sessionEpoch = $sessionEpoch;

    return $this;
}
/**
 * @return FetchTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param FetchTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return ForgottenTopic[]
 */
public function getForgottenTopicsData(): array
{
    return $this->forgottenTopicsData;
}

/**
 * @param ForgottenTopic[] $forgottenTopicsData
 *
 * @return self
 */
public function setForgottenTopicsData(array $forgottenTopicsData): self
{
    $this->forgottenTopicsData = $forgottenTopicsData;

    return $this;
}
/**
 * @return string
 */
public function getRackId(): string
{
    return $this->rackId;
}

/**
 * @param string $rackId
 *
 * @return self
 */
public function setRackId(string $rackId): self
{
    $this->rackId = $rackId;

    return $this;
}

}