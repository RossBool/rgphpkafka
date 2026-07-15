<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterPartition;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterPartitionRequest extends AbstractRequest
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

/**
 * The topics to alter ISRs for.
 *
 * @var TopicData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [0,1,2,3], [0,1,2,3], [], [], null),
new ProtocolField('brokerEpoch', 'int64', false, [0,1,2,3], [0,1,2,3], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1,2,3], [0,1,2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 56;
}

public function getMaxSupportedVersion(): int
{
    return 3;
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
/**
 * @return TopicData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}