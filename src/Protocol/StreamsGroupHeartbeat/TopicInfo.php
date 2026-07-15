<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicInfo extends AbstractStruct
{
    /**
 * The name of the topic.
 *
 * @var string
 */
protected $name = '';

/**
 * The number of partitions in the topic. Can be 0 if no specific number of partitions is enforced. Always 0 for changelog topics.
 *
 * @var int
 */
protected $partitions = 0;

/**
 * The replication factor of the topic. Can be 0 if the default replication factor should be used.
 *
 * @var int
 */
protected $replicationFactor = 0;

/**
 * Topic-level configurations as key-value pairs.
 *
 * @var KeyValue[]
 */
protected $topicConfigs = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('partitions', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('replicationFactor', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('topicConfigs', KeyValue::class, true, [0,1], [0,1], [], [], null),

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
 * @return int
 */
public function getPartitions(): int
{
    return $this->partitions;
}

/**
 * @param int $partitions
 *
 * @return self
 */
public function setPartitions(int $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}
/**
 * @return int
 */
public function getReplicationFactor(): int
{
    return $this->replicationFactor;
}

/**
 * @param int $replicationFactor
 *
 * @return self
 */
public function setReplicationFactor(int $replicationFactor): self
{
    $this->replicationFactor = $replicationFactor;

    return $this;
}
/**
 * @return KeyValue[]
 */
public function getTopicConfigs(): array
{
    return $this->topicConfigs;
}

/**
 * @param KeyValue[] $topicConfigs
 *
 * @return self
 */
public function setTopicConfigs(array $topicConfigs): self
{
    $this->topicConfigs = $topicConfigs;

    return $this;
}

}