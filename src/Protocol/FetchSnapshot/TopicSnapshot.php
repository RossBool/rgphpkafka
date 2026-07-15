<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FetchSnapshot;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicSnapshot extends AbstractStruct
{
    /**
 * The name of the topic to fetch.
 *
 * @var string
 */
protected $name = '';

/**
 * The partitions to fetch.
 *
 * @var PartitionSnapshot[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('partitions', PartitionSnapshot::class, true, [0,1], [0,1], [], [], null),

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
 * @return PartitionSnapshot[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param PartitionSnapshot[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}