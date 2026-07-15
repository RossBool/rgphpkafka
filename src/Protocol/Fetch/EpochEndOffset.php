<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class EpochEndOffset extends AbstractStruct
{
    /**
 * The largest epoch.
 *
 * @var int
 */
protected $epoch = -1;

/**
 * The end offset of the epoch.
 *
 * @var int
 */
protected $endOffset = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('epoch', 'int32', false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('endOffset', 'int64', false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
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

}