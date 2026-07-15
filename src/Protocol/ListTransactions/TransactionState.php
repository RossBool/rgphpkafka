<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListTransactions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TransactionState extends AbstractStruct
{
    /**
 * The transactional id.
 *
 * @var string
 */
protected $transactionalId = '';

/**
 * The producer id.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The current transaction state of the producer.
 *
 * @var string
 */
protected $transactionState = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('producerId', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('transactionState', 'string', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
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

}