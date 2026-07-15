<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterPartitionReassignments;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterPartitionReassignmentsRequest extends AbstractRequest
{
    /**
 * The time in ms to wait for the request to complete.
 *
 * @var int
 */
protected $timeoutMs = 60000;

/**
 * The option indicating whether changing the replication factor of any given partition as part of this request is a valid move.
 *
 * @var bool
 */
protected $allowReplicationFactorChange = true;

/**
 * The topics to reassign.
 *
 * @var ReassignableTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('timeoutMs', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('allowReplicationFactorChange', 'bool', false, [1], [0,1], [], [], null),
new ProtocolField('topics', ReassignableTopic::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 45;
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
/**
 * @return bool
 */
public function getAllowReplicationFactorChange(): bool
{
    return $this->allowReplicationFactorChange;
}

/**
 * @param bool $allowReplicationFactorChange
 *
 * @return self
 */
public function setAllowReplicationFactorChange(bool $allowReplicationFactorChange): self
{
    $this->allowReplicationFactorChange = $allowReplicationFactorChange;

    return $this;
}
/**
 * @return ReassignableTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param ReassignableTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}