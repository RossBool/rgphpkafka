<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TaskIds extends AbstractStruct
{
    /**
 * The subtopology identifier.
 *
 * @var string
 */
protected $subtopologyId = '';

/**
 * The partitions of the input topics processed by this member.
 *
 * @var int[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('subtopologyId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('partitions', 'int32', true, [0,1], [0,1], [], [], null),

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
public function getSubtopologyId(): string
{
    return $this->subtopologyId;
}

/**
 * @param string $subtopologyId
 *
 * @return self
 */
public function setSubtopologyId(string $subtopologyId): self
{
    $this->subtopologyId = $subtopologyId;

    return $this;
}
/**
 * @return int[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param int[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}