<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsRequestGroup extends AbstractStruct
{
    /**
 * The group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The topics to describe offsets for, or null for all topic-partitions.
 *
 * @var DescribeShareGroupOffsetsRequestTopic[]|null
 */
protected $topics = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('topics', DescribeShareGroupOffsetsRequestTopic::class, true, [0,1], [0,1], [0,1], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return DescribeShareGroupOffsetsRequestTopic[]|null
 */
public function getTopics(): ?array
{
    return $this->topics;
}

/**
 * @param DescribeShareGroupOffsetsRequestTopic[]|null $topics
 *
 * @return self
 */
public function setTopics(?array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}