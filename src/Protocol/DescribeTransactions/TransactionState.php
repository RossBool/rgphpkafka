<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTransactions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TransactionState extends AbstractStruct
{
    /**
 * The error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The transactional id.
 *
 * @var string
 */
protected $transactionalId = '';

/**
 * The current transaction state of the producer.
 *
 * @var string
 */
protected $transactionState = '';

/**
 * The timeout in milliseconds for the transaction.
 *
 * @var int
 */
protected $transactionTimeoutMs = 0;

/**
 * The start time of the transaction in milliseconds.
 *
 * @var int
 */
protected $transactionStartTimeMs = 0;

/**
 * The current producer id associated with the transaction.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The current epoch associated with the producer id.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * The set of partitions included in the current transaction (if active). When a transaction is preparing to commit or abort, this will include only partitions which do not have markers.
 *
 * @var TopicData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('transactionalId', 'string', false, [0], [0], [], [], null),
new ProtocolField('transactionState', 'string', false, [0], [0], [], [], null),
new ProtocolField('transactionTimeoutMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('transactionStartTimeMs', 'int64', false, [0], [0], [], [], null),
new ProtocolField('producerId', 'int64', false, [0], [0], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [0], [0], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0], [0], [], [], null),

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
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
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
 * @return string
 */
public function getTransactionState(): string
{
    return $this->transactionState;
}

/**
 * @param string $transactionState
 *
 * @return self
 */
public function setTransactionState(string $transactionState): self
{
    $this->transactionState = $transactionState;

    return $this;
}
/**
 * @return int
 */
public function getTransactionTimeoutMs(): int
{
    return $this->transactionTimeoutMs;
}

/**
 * @param int $transactionTimeoutMs
 *
 * @return self
 */
public function setTransactionTimeoutMs(int $transactionTimeoutMs): self
{
    $this->transactionTimeoutMs = $transactionTimeoutMs;

    return $this;
}
/**
 * @return int
 */
public function getTransactionStartTimeMs(): int
{
    return $this->transactionStartTimeMs;
}

/**
 * @param int $transactionStartTimeMs
 *
 * @return self
 */
public function setTransactionStartTimeMs(int $transactionStartTimeMs): self
{
    $this->transactionStartTimeMs = $transactionStartTimeMs;

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