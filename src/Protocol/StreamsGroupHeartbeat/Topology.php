<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Topology extends AbstractStruct
{
    /**
 * The epoch of the topology. Used to check if the topology corresponds to the topology initialized on the brokers.
 *
 * @var int
 */
protected $epoch = 0;

/**
 * The sub-topologies of the streams application.
 *
 * @var Subtopology[]
 */
protected $subtopologies = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('epoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('subtopologies', Subtopology::class, true, [0,1], [0,1], [], [], null),

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
 * @return Subtopology[]
 */
public function getSubtopologies(): array
{
    return $this->subtopologies;
}

/**
 * @param Subtopology[] $subtopologies
 *
 * @return self
 */
public function setSubtopologies(array $subtopologies): self
{
    $this->subtopologies = $subtopologies;

    return $this;
}

}