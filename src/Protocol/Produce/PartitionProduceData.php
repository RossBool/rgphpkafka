<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionProduceData extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $index = 0;

/**
 * The record data to be produced.
 *
 * @var \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null
 */
protected $records = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('index', 'int32', false, [0,1,2,3,4,5,6,7,8], [], [], [], null),
new ProtocolField('records', 'records', false, [0,1,2,3,4,5,6,7,8], [], [0,1,2,3,4,5,6,7,8], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [];
}


    /**
 * @return int
 */
public function getIndex(): int
{
    return $this->index;
}

/**
 * @param int $index
 *
 * @return self
 */
public function setIndex(int $index): self
{
    $this->index = $index;

    return $this;
}
/**
 * @return \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null
 */
public function getRecords(): ?\longlang\phpkafka\Protocol\RecordBatch\RecordBatch
{
    return $this->records;
}

/**
 * @param \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null $records
 *
 * @return self
 */
public function setRecords(?\longlang\phpkafka\Protocol\RecordBatch\RecordBatch $records): self
{
    $this->records = $records;

    return $this;
}

}