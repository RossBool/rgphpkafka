<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\WriteTxnMarkers;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class WritableTxnMarker extends AbstractStruct
{
    /**
 * The current producer ID.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The current epoch associated with the producer ID.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * The result of the transaction to write to the partitions (false = ABORT, true = COMMIT).
 *
 * @var bool
 */
protected $transactionResult = false;

/**
 * Each topic that we want to write transaction marker(s) for.
 *
 * @var WritableTxnMarkerTopic[]
 */
protected $topics = [];

/**
 * Epoch associated with the transaction state partition hosted by this transaction coordinator.
 *
 * @var int
 */
protected $coordinatorEpoch = 0;

/**
 * Transaction version of the marker. Ex: 0/1 = legacy (TV0/TV1), 2 = TV2 etc.
 *
 * @var int
 */
protected $transactionVersion = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('producerId', 'int64', false, [0,1,2], [1,2], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [0,1,2], [1,2], [], [], null),
new ProtocolField('transactionResult', 'bool', false, [0,1,2], [1,2], [], [], null),
new ProtocolField('topics', WritableTxnMarkerTopic::class, true, [0,1,2], [1,2], [], [], null),
new ProtocolField('coordinatorEpoch', 'int32', false, [0,1,2], [1,2], [], [], null),
new ProtocolField('transactionVersion', 'int8', false, [2], [1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [1,2];
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
 * @return bool
 */
public function getTransactionResult(): bool
{
    return $this->transactionResult;
}

/**
 * @param bool $transactionResult
 *
 * @return self
 */
public function setTransactionResult(bool $transactionResult): self
{
    $this->transactionResult = $transactionResult;

    return $this;
}
/**
 * @return WritableTxnMarkerTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param WritableTxnMarkerTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

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
public function getTransactionVersion(): int
{
    return $this->transactionVersion;
}

/**
 * @param int $transactionVersion
 *
 * @return self
 */
public function setTransactionVersion(int $transactionVersion): self
{
    $this->transactionVersion = $transactionVersion;

    return $this;
}

}