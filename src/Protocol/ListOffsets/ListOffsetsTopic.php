<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ListOffsetsTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * Each partition in the request.
 *
 * @var ListOffsetsPartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('partitions', ListOffsetsPartition::class, true, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10,11];
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
 * @return ListOffsetsPartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param ListOffsetsPartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}