<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ReplicaState extends AbstractStruct
{
    /**
 * The replica ID of the follower, or -1 if this request is from a consumer.
 *
 * @var int
 */
protected $replicaId = -1;

/**
 * The epoch of this follower, or -1 if not available.
 *
 * @var int
 */
protected $replicaEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('replicaEpoch', 'int64', false, [15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

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
public function getReplicaId(): int
{
    return $this->replicaId;
}

/**
 * @param int $replicaId
 *
 * @return self
 */
public function setReplicaId(int $replicaId): self
{
    $this->replicaId = $replicaId;

    return $this;
}
/**
 * @return int
 */
public function getReplicaEpoch(): int
{
    return $this->replicaEpoch;
}

/**
 * @param int $replicaEpoch
 *
 * @return self
 */
public function setReplicaEpoch(int $replicaEpoch): self
{
    $this->replicaEpoch = $replicaEpoch;

    return $this;
}

}