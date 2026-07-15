<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreatePartitions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CreatePartitionsAssignment extends AbstractStruct
{
    /**
 * The assigned broker IDs.
 *
 * @var int[]
 */
protected $brokerIds = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerIds', 'int32', true, [0,1,2,3], [2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3];
}


    /**
 * @return int[]
 */
public function getBrokerIds(): array
{
    return $this->brokerIds;
}

/**
 * @param int[] $brokerIds
 *
 * @return self
 */
public function setBrokerIds(array $brokerIds): self
{
    $this->brokerIds = $brokerIds;

    return $this;
}

}