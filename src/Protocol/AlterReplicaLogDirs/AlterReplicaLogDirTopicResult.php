<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterReplicaLogDirs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterReplicaLogDirTopicResult extends AbstractStruct
{
    /**
 * The name of the topic.
 *
 * @var string
 */
protected $topicName = '';

/**
 * The results for each partition.
 *
 * @var AlterReplicaLogDirPartitionResult[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0,1,2], [2], [], [], null),
new ProtocolField('partitions', AlterReplicaLogDirPartitionResult::class, true, [0,1,2], [2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2];
}


    /**
 * @return string
 */
public function getTopicName(): string
{
    return $this->topicName;
}

/**
 * @param string $topicName
 *
 * @return self
 */
public function setTopicName(string $topicName): self
{
    $this->topicName = $topicName;

    return $this;
}
/**
 * @return AlterReplicaLogDirPartitionResult[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param AlterReplicaLogDirPartitionResult[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}