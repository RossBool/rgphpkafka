<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AllocateProducerIds;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AllocateProducerIdsRequest extends AbstractRequest
{
    /**
 * The ID of the requesting broker.
 *
 * @var int
 */
protected $brokerId = 0;

/**
 * The epoch of the requesting broker.
 *
 * @var int
 */
protected $brokerEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('brokerEpoch', 'int64', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 67;
}

public function getMaxSupportedVersion(): int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [0];
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