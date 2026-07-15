<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnTransaction extends AbstractStruct
{
    /**
 * The transactional id corresponding to the transaction.
 *
 * @var string
 */
protected $transactionalId = '';

/**
 * Current producer id in use by the transactional id.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * Current epoch associated with the producer id.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * Boolean to signify if we want to check if the partition is in the transaction rather than add it.
 *
 * @var bool
 */
protected $verifyOnly = false;

/**
 * The partitions to add to the transaction.
 *
 * @var AddPartitionsToTxnTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('producerId', 'int64', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('verifyOnly', 'bool', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('topics', AddPartitionsToTxnTopic::class, true, [4,5], [3,4,5], [], [], null),

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
public function getTransactionalId(): string
{
    return $this->transactionalId;
}

/**
 * @param string $transactionalId
 *
 * @return self
 */
public function setTransactionalId(string $transactionalId): self
{
    $this->transactionalId = $transactionalId;

    return $this;
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
public function getVerifyOnly(): bool
{
    return $this->verifyOnly;
}

/**
 * @param bool $verifyOnly
 *
 * @return self
 */
public function setVerifyOnly(bool $verifyOnly): self
{
    $this->verifyOnly = $verifyOnly;

    return $this;
}
/**
 * @return AddPartitionsToTxnTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param AddPartitionsToTxnTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}