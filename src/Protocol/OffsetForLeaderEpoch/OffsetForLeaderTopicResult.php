<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetForLeaderEpoch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetForLeaderTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topic = '';

/**
 * Each partition in the topic we fetched offsets for.
 *
 * @var EpochEndOffset[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topic', 'string', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('partitions', EpochEndOffset::class, true, [0,1,2,3,4], [4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4];
}


    /**
 * @return string
 */
public function getTopic(): string
{
    return $this->topic;
}

/**
 * @param string $topic
 *
 * @return self
 */
public function setTopic(string $topic): self
{
    $this->topic = $topic;

    return $this;
}
/**
 * @return EpochEndOffset[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param EpochEndOffset[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}