<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeProducers;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ProducerState extends AbstractStruct
{
    /**
 * The producer id.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The producer epoch.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * The last sequence number sent by the producer.
 *
 * @var int
 */
protected $lastSequence = -1;

/**
 * The last timestamp sent by the producer.
 *
 * @var int
 */
protected $lastTimestamp = -1;

/**
 * The current epoch of the producer group.
 *
 * @var int
 */
protected $coordinatorEpoch = 0;

/**
 * The current transaction start offset of the producer.
 *
 * @var int
 */
protected $currentTxnStartOffset = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('producerId', 'int64', false, [0], [0], [], [], null),
new ProtocolField('producerEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('lastSequence', 'int32', false, [0], [0], [], [], null),
new ProtocolField('lastTimestamp', 'int64', false, [0], [0], [], [], null),
new ProtocolField('coordinatorEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('currentTxnStartOffset', 'int64', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return int
 */
public function getProducerId(): int
{
    return $this->producerId;
}

/**
 * @param int $producerId
 *
 * @return self
 */
public function setProducerId(int $producerId): self
{
    $this->producerId = $producerId;

    return $this;
}
/**
 * @return int
 */
public function getProducerEpoch(): int
{
    return $this->producerEpoch;
}

/**
 * @param int $producerEpoch
 *
 * @return self
 */
public function setProducerEpoch(int $producerEpoch): self
{
    $this->producerEpoch = $producerEpoch;

    return $this;
}
/**
 * @return int
 */
public function getLastSequence(): int
{
    return $this->lastSequence;
}

/**
 * @param int $lastSequence
 *
 * @return self
 */
public function setLastSequence(int $lastSequence): self
{
    $this->lastSequence = $lastSequence;

    return $this;
}
/**
 * @return int
 */
public function getLastTimestamp(): int
{
    return $this->lastTimestamp;
}

/**
 * @param int $lastTimestamp
 *
 * @return self
 */
public function setLastTimestamp(int $lastTimestamp): self
{
    $this->lastTimestamp = $lastTimestamp;

    return $this;
}
/**
 * @return int
 */
public function getCoordinatorEpoch(): int
{
    return $this->coordinatorEpoch;
}

/**
 * @param int $coordinatorEpoch
 *
 * @return self
 */
public function setCoordinatorEpoch(int $coordinatorEpoch): self
{
    $this->coordinatorEpoch = $coordinatorEpoch;

    return $this;
}
/**
 * @return int
 */
public function getCurrentTxnStartOffset(): int
{
    return $this->currentTxnStartOffset;
}

/**
 * @param int $currentTxnStartOffset
 *
 * @return self
 */
public function setCurrentTxnStartOffset(int $currentTxnStartOffset): self
{
    $this->currentTxnStartOffset = $currentTxnStartOffset;

    return $this;
}

}