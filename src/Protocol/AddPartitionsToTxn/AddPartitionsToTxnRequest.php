<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnRequest extends AbstractRequest
{
    /**
 * List of transactions to add partitions to.
 *
 * @var AddPartitionsToTxnTransaction[]
 */
protected $transactions = [];

/**
 * The transactional id corresponding to the transaction.
 *
 * @var string
 */
protected $v3AndBelowTransactionalId = '';

/**
 * Current producer id in use by the transactional id.
 *
 * @var int
 */
protected $v3AndBelowProducerId = 0;

/**
 * Current epoch associated with the producer id.
 *
 * @var int
 */
protected $v3AndBelowProducerEpoch = 0;

/**
 * The partitions to add to the transaction.
 *
 * @var AddPartitionsToTxnTopic[]
 */
protected $v3AndBelowTopics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactions', AddPartitionsToTxnTransaction::class, true, [4,5], [3,4,5], [], [], null),
new ProtocolField('v3AndBelowTransactionalId', 'string', false, [0,1,2,3], [3,4,5], [], [], null),
new ProtocolField('v3AndBelowProducerId', 'int64', false, [0,1,2,3], [3,4,5], [], [], null),
new ProtocolField('v3AndBelowProducerEpoch', 'int16', false, [0,1,2,3], [3,4,5], [], [], null),
new ProtocolField('v3AndBelowTopics', AddPartitionsToTxnTopic::class, true, [0,1,2,3], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 24;
}

public function getMaxSupportedVersion(): int
{
    return 5;
}

public function getFlexibleVersions(): array
{
    return [3,4,5];
}


    /**
 * @return AddPartitionsToTxnTransaction[]
 */
public function getTransactions(): array
{
    return $this->transactions;
}

/**
 * @param AddPartitionsToTxnTransaction[] $transactions
 *
 * @return self
 */
public function setTransactions(array $transactions): self
{
    $this->transactions = $transactions;

    return $this;
}
/**
 * @return string
 */
public function getV3AndBelowTransactionalId(): string
{
    return $this->v3AndBelowTransactionalId;
}

/**
 * @param string $v3AndBelowTransactionalId
 *
 * @return self
 */
public function setV3AndBelowTransactionalId(string $v3AndBelowTransactionalId): self
{
    $this->v3AndBelowTransactionalId = $v3AndBelowTransactionalId;

    return $this;
}
/**
 * @return int
 */
public function getV3AndBelowProducerId(): int
{
    return $this->v3AndBelowProducerId;
}

/**
 * @param int $v3AndBelowProducerId
 *
 * @return self
 */
public function setV3AndBelowProducerId(int $v3AndBelowProducerId): self
{
    $this->v3AndBelowProducerId = $v3AndBelowProducerId;

    return $this;
}
/**
 * @return int
 */
public function getV3AndBelowProducerEpoch(): int
{
    return $this->v3AndBelowProducerEpoch;
}

/**
 * @param int $v3AndBelowProducerEpoch
 *
 * @return self
 */
public function setV3AndBelowProducerEpoch(int $v3AndBelowProducerEpoch): self
{
    $this->v3AndBelowProducerEpoch = $v3AndBelowProducerEpoch;

    return $this;
}
/**
 * @return AddPartitionsToTxnTopic[]
 */
public function getV3AndBelowTopics(): array
{
    return $this->v3AndBelowTopics;
}

/**
 * @param AddPartitionsToTxnTopic[] $v3AndBelowTopics
 *
 * @return self
 */
public function setV3AndBelowTopics(array $v3AndBelowTopics): self
{
    $this->v3AndBelowTopics = $v3AndBelowTopics;

    return $this;
}

}