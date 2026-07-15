<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The results for each partition.
 *
 * @var AddPartitionsToTxnPartitionResult[]
 */
protected $resultsByPartition = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('resultsByPartition', AddPartitionsToTxnPartitionResult::class, true, [0,1,2,3,4,5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5];
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
 * @return AddPartitionsToTxnPartitionResult[]
 */
public function getResultsByPartition(): array
{
    return $this->resultsByPartition;
}

/**
 * @param AddPartitionsToTxnPartitionResult[] $resultsByPartition
 *
 * @return self
 */
public function setResultsByPartition(array $resultsByPartition): self
{
    $this->resultsByPartition = $resultsByPartition;

    return $this;
}

}