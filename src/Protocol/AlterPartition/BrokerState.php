<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterPartition;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class BrokerState extends AbstractStruct
{
    /**
 * The ID of the broker.
 *
 * @var int
 */
protected $brokerId = 0;

/**
 * The epoch of the broker. It will be -1 if the epoch check is not supported.
 *
 * @var int
 */
protected $brokerEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [3], [0,1,2,3], [], [], null),
new ProtocolField('brokerEpoch', 'int64', false, [3], [0,1,2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2,3];
}


    /**
 * @return int
 */
public function getBrokerId(): int
{
    return $this->brokerId;
}

/**
 * @param int $brokerId
 *
 * @return self
 */
public function setBrokerId(int $brokerId): self
{
    $this->brokerId = $brokerId;

    return $this;
}
/**
 * @return int
 */
public function getBrokerEpoch(): int
{
    return $this->brokerEpoch;
}

/**
 * @param int $brokerEpoch
 *
 * @return self
 */
public function setBrokerEpoch(int $brokerEpoch): self
{
    $this->brokerEpoch = $brokerEpoch;

    return $this;
}

}