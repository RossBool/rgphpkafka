<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\TxnOffsetCommit;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TxnOffsetCommitRequestTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The partitions inside the topic that we want to commit offsets for.
 *
 * @var TxnOffsetCommitRequestPartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5], [3,4,5,6], [], [], null),
new ProtocolField('topicId', 'uuid', false, [6], [3,4,5,6], [], [], null),
new ProtocolField('partitions', TxnOffsetCommitRequestPartition::class, true, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5,6];
}


    /**
 * @return string
 */
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

    return $this;
}
/**
 * @return string
 */
public function getTopicId(): string
{
    return $this->topicId;
}

/**
 * @param string $topicId
 *
 * @return self
 */
public function setTopicId(string $topicId): self
{
    $this->topicId = $topicId;

    return $this;
}
/**
 * @return TxnOffsetCommitRequestPartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param TxnOffsetCommitRequestPartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}