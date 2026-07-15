<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetCommit;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetCommitRequest extends AbstractRequest
{
    /**
 * The unique group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The generation of the group if using the classic group protocol or the member epoch if using the consumer protocol.
 *
 * @var int
 */
protected $generationIdOrMemberEpoch = -1;

/**
 * The member ID assigned by the group coordinator.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The unique identifier of the consumer instance provided by end user.
 *
 * @var string|null
 */
protected $groupInstanceId = null;

/**
 * The time period in ms to retain the offset.
 *
 * @var int
 */
protected $retentionTimeMs = -1;

/**
 * The topics to commit offsets for.
 *
 * @var OffsetCommitRequestTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5,6,7,8,9,10], [8,9,10], [], [], null),
new ProtocolField('generationIdOrMemberEpoch', 'int32', false, [1,2,3,4,5,6,7,8,9,10], [8,9,10], [], [], null),
new ProtocolField('memberId', 'string', false, [1,2,3,4,5,6,7,8,9,10], [8,9,10], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [7,8,9,10], [8,9,10], [7,8,9,10], [], null),
new ProtocolField('retentionTimeMs', 'int64', false, [2,3,4], [8,9,10], [], [], null),
new ProtocolField('topics', OffsetCommitRequestTopic::class, true, [0,1,2,3,4,5,6,7,8,9,10], [8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 8;
}

public function getMaxSupportedVersion(): int
{
    return 10;
}

public function getFlexibleVersions(): array
{
    return [8,9,10];
}


    /**
 * @return string
 */
public function getGroupId(): string
{
    return $this->groupId;
}

/**
 * @param string $groupId
 *
 * @return self
 */
public function setGroupId(string $groupId): self
{
    $this->groupId = $groupId;

    return $this;
}
/**
 * @return int
 */
public function getGenerationIdOrMemberEpoch(): int
{
    return $this->generationIdOrMemberEpoch;
}

/**
 * @param int $generationIdOrMemberEpoch
 *
 * @return self
 */
public function setGenerationIdOrMemberEpoch(int $generationIdOrMemberEpoch): self
{
    $this->generationIdOrMemberEpoch = $generationIdOrMemberEpoch;

    return $this;
}
/**
 * @return string
 */
public function getMemberId(): string
{
    return $this->memberId;
}

/**
 * @param string $memberId
 *
 * @return self
 */
public function setMemberId(string $memberId): self
{
    $this->memberId = $memberId;

    return $this;
}
/**
 * @return string|null
 */
public function getGroupInstanceId(): ?string
{
    return $this->groupInstanceId;
}

/**
 * @param string|null $groupInstanceId
 *
 * @return self
 */
public function setGroupInstanceId(?string $groupInstanceId): self
{
    $this->groupInstanceId = $groupInstanceId;

    return $this;
}
/**
 * @return int
 */
public function getRetentionTimeMs(): int
{
    return $this->retentionTimeMs;
}

/**
 * @param int $retentionTimeMs
 *
 * @return self
 */
public function setRetentionTimeMs(int $retentionTimeMs): self
{
    $this->retentionTimeMs = $retentionTimeMs;

    return $this;
}
/**
 * @return OffsetCommitRequestTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param OffsetCommitRequestTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}