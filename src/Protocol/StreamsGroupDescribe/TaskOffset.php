<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TaskOffset extends AbstractStruct
{
    /**
 * The subtopology identifier.
 *
 * @var string
 */
protected $subtopologyId = '';

/**
 * The partition.
 *
 * @var int
 */
protected $partition = 0;

/**
 * The offset.
 *
 * @var int
 */
protected $offset = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('subtopologyId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('partition', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('offset', 'int64', false, [0,1], [0,1], [], [], null),

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
 * @return int
 */
public function getPartition(): int
{
    return $this->partition;
}

/**
 * @param int $partition
 *
 * @return self
 */
public function setPartition(int $partition): self
{
    $this->partition = $partition;

    return $this;
}
/**
 * @return int
 */
public function getOffset(): int
{
    return $this->offset;
}

/**
 * @param int $offset
 *
 * @return self
 */
public function setOffset(int $offset): self
{
    $this->offset = $offset;

    return $this;
}

}