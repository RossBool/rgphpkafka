<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateTopics;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CreatableTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The number of partitions to create in the topic, or -1 if we are either specifying a manual partition assignment or using the default partitions.
 *
 * @var int
 */
protected $numPartitions = 0;

/**
 * The number of replicas to create for each partition in the topic, or -1 if we are either specifying a manual partition assignment or using the default replication factor.
 *
 * @var int
 */
protected $replicationFactor = 0;

/**
 * The manual partition assignment, or the empty array if we are using automatic assignment.
 *
 * @var CreatableReplicaAssignment[]
 */
protected $assignments = [];

/**
 * The custom topic configurations to set.
 *
 * @var CreatableTopicConfig[]
 */
protected $configs = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('numPartitions', 'int32', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('replicationFactor', 'int16', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('assignments', CreatableReplicaAssignment::class, true, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('configs', CreatableTopicConfig::class, true, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [5,6,7];
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
public function getNumPartitions(): int
{
    return $this->numPartitions;
}

/**
 * @param int $numPartitions
 *
 * @return self
 */
public function setNumPartitions(int $numPartitions): self
{
    $this->numPartitions = $numPartitions;

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
 * @return CreatableReplicaAssignment[]
 */
public function getAssignments(): array
{
    return $this->assignments;
}

/**
 * @param CreatableReplicaAssignment[] $assignments
 *
 * @return self
 */
public function setAssignments(array $assignments): self
{
    $this->assignments = $assignments;

    return $this;
}
/**
 * @return CreatableTopicConfig[]
 */
public function getConfigs(): array
{
    return $this->configs;
}

/**
 * @param CreatableTopicConfig[] $configs
 *
 * @return self
 */
public function setConfigs(array $configs): self
{
    $this->configs = $configs;

    return $this;
}

}