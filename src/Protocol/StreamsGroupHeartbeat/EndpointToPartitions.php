<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class EndpointToPartitions extends AbstractStruct
{
    /**
 * User-defined endpoint to connect to the node
 *
 * @var Endpoint
 */
protected $userEndpoint = null;

/**
 * All topic partitions materialized by active tasks on the node
 *
 * @var TopicPartition[]
 */
protected $activePartitions = [];

/**
 * All topic partitions materialized by standby tasks on the node
 *
 * @var TopicPartition[]
 */
protected $standbyPartitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('userEndpoint', Endpoint::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('activePartitions', TopicPartition::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('standbyPartitions', TopicPartition::class, true, [0,1], [0,1], [], [], null),

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
 * @return Endpoint
 */
public function getUserEndpoint(): Endpoint
{
    return $this->userEndpoint;
}

/**
 * @param Endpoint $userEndpoint
 *
 * @return self
 */
public function setUserEndpoint(Endpoint $userEndpoint): self
{
    $this->userEndpoint = $userEndpoint;

    return $this;
}
/**
 * @return TopicPartition[]
 */
public function getActivePartitions(): array
{
    return $this->activePartitions;
}

/**
 * @param TopicPartition[] $activePartitions
 *
 * @return self
 */
public function setActivePartitions(array $activePartitions): self
{
    $this->activePartitions = $activePartitions;

    return $this;
}
/**
 * @return TopicPartition[]
 */
public function getStandbyPartitions(): array
{
    return $this->standbyPartitions;
}

/**
 * @param TopicPartition[] $standbyPartitions
 *
 * @return self
 */
public function setStandbyPartitions(array $standbyPartitions): self
{
    $this->standbyPartitions = $standbyPartitions;

    return $this;
}

}