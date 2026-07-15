<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListOffsets;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ListOffsetsRequest extends AbstractRequest
{
    /**
 * The broker ID of the requester, or -1 if this request is being made by a normal consumer.
 *
 * @var int
 */
protected $replicaId = 0;

/**
 * This setting controls the visibility of transactional records. Using READ_UNCOMMITTED (isolation_level = 0) makes all records visible. With READ_COMMITTED (isolation_level = 1), non-transactional and COMMITTED transactional records are visible. To be more concrete, READ_COMMITTED returns all data from offsets smaller than the current LSO (last stable offset), and enables the inclusion of the list of aborted transactions in the result, which allows consumers to discard ABORTED transactional records.
 *
 * @var int
 */
protected $isolationLevel = 0;

/**
 * Each topic in the request.
 *
 * @var ListOffsetsTopic[]
 */
protected $topics = [];

/**
 * The timeout to await a response in milliseconds for requests that require reading from remote storage for topics enabled with tiered storage.
 *
 * @var int
 */
protected $timeoutMs = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('isolationLevel', 'int8', false, [2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('topics', ListOffsetsTopic::class, true, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('timeoutMs', 'int32', false, [10,11], [6,7,8,9,10,11], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 2;
}

public function getMaxSupportedVersion(): int
{
    return 11;
}

public function getFlexibleVersions(): array
{
    return [6,7,8,9,10,11];
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
 * @return ListOffsetsTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param ListOffsetsTopic[] $topics
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
public function getTimeoutMs(): int
{
    return $this->timeoutMs;
}

/**
 * @param int $timeoutMs
 *
 * @return self
 */
public function setTimeoutMs(int $timeoutMs): self
{
    $this->timeoutMs = $timeoutMs;

    return $this;
}

}