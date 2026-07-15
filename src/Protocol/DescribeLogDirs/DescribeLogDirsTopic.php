<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeLogDirs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeLogDirsTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The partitions.
 *
 * @var DescribeLogDirsPartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5], [2,3,4,5], [], [], null),
new ProtocolField('partitions', DescribeLogDirsPartition::class, true, [0,1,2,3,4,5], [2,3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3,4,5];
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
 * @return DescribeLogDirsPartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param DescribeLogDirsPartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}