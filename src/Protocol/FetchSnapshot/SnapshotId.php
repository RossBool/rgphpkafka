<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FetchSnapshot;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class SnapshotId extends AbstractStruct
{
    /**
 * The end offset of the snapshot.
 *
 * @var int
 */
protected $endOffset = 0;

/**
 * The epoch of the snapshot.
 *
 * @var int
 */
protected $epoch = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('endOffset', 'int64', false, [0,1], [0,1], [], [], null),
new ProtocolField('epoch', 'int32', false, [0,1], [0,1], [], [], null),

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
 * @return int
 */
public function getEndOffset(): int
{
    return $this->endOffset;
}

/**
 * @param int $endOffset
 *
 * @return self
 */
public function setEndOffset(int $endOffset): self
{
    $this->endOffset = $endOffset;

    return $this;
}
/**
 * @return int
 */
public function getEpoch(): int
{
    return $this->epoch;
}

/**
 * @param int $epoch
 *
 * @return self
 */
public function setEpoch(int $epoch): self
{
    $this->epoch = $epoch;

    return $this;
}

}