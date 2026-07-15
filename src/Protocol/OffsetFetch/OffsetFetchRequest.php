<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetFetch;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetFetchRequest extends AbstractRequest
{
    /**
 * The group to fetch offsets for.
 *
 * @var string
 */
protected $groupId = '';

/**
 * Each topic we would like to fetch offsets for, or null to fetch offsets for all topics.
 *
 * @var OffsetFetchRequestTopic[]|null
 */
protected $topics = null;

/**
 * Each group we would like to fetch offsets for.
 *
 * @var OffsetFetchRequestGroup[]
 */
protected $groups = [];

/**
 * Whether broker should hold on returning unstable offsets but set a retriable error code for the partitions.
 *
 * @var bool
 */
protected $requireStable = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5,6,7], [6,7,8,9,10], [], [], null),
new ProtocolField('topics', OffsetFetchRequestTopic::class, true, [0,1,2,3,4,5,6,7], [6,7,8,9,10], [2,3,4,5,6,7], [], null),
new ProtocolField('groups', OffsetFetchRequestGroup::class, true, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('requireStable', 'bool', false, [7,8,9,10], [6,7,8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 9;
}

public function getMaxSupportedVersion(): int
{
    return 10;
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
 * @return OffsetFetchRequestTopic[]|null
 */
public function getTopics(): ?array
{
    return $this->topics;
}

/**
 * @param OffsetFetchRequestTopic[]|null $topics
 *
 * @return self
 */
public function setTopics(?array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return OffsetFetchRequestGroup[]
 */
public function getGroups(): array
{
    return $this->groups;
}

/**
 * @param OffsetFetchRequestGroup[] $groups
 *
 * @return self
 */
public function setGroups(array $groups): self
{
    $this->groups = $groups;

    return $this;
}
/**
 * @return bool
 */
public function getRequireStable(): bool
{
    return $this->requireStable;
}

/**
 * @param bool $requireStable
 *
 * @return self
 */
public function setRequireStable(bool $requireStable): self
{
    $this->requireStable = $requireStable;

    return $this;
}

}