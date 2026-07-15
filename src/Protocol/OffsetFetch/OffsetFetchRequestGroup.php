<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetFetchRequestGroup extends AbstractStruct
{
    /**
 * The group ID.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The member id.
 *
 * @var string|null
 */
protected $memberId = null;

/**
 * The member epoch if using the new consumer protocol (KIP-848).
 *
 * @var int
 */
protected $memberEpoch = -1;

/**
 * Each topic we would like to fetch offsets for, or null to fetch offsets for all topics.
 *
 * @var OffsetFetchRequestTopics[]|null
 */
protected $topics = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('memberId', 'string', false, [9,10], [6,7,8,9,10], [9,10], [], null),
new ProtocolField('memberEpoch', 'int32', false, [9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('topics', OffsetFetchRequestTopics::class, true, [8,9,10], [6,7,8,9,10], [8,9,10], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10];
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
 * @return string|null
 */
public function getMemberId(): ?string
{
    return $this->memberId;
}

/**
 * @param string|null $memberId
 *
 * @return self
 */
public function setMemberId(?string $memberId): self
{
    $this->memberId = $memberId;

    return $this;
}
/**
 * @return int
 */
public function getMemberEpoch(): int
{
    return $this->memberEpoch;
}

/**
 * @param int $memberEpoch
 *
 * @return self
 */
public function setMemberEpoch(int $memberEpoch): self
{
    $this->memberEpoch = $memberEpoch;

    return $this;
}
/**
 * @return OffsetFetchRequestTopics[]|null
 */
public function getTopics(): ?array
{
    return $this->topics;
}

/**
 * @param OffsetFetchRequestTopics[]|null $topics
 *
 * @return self
 */
public function setTopics(?array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}