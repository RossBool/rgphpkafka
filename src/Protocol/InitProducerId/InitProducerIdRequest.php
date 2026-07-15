<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\InitProducerId;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class InitProducerIdRequest extends AbstractRequest
{
    /**
 * The transactional id, or null if the producer is not transactional.
 *
 * @var string|null
 */
protected $transactionalId = null;

/**
 * The time in ms to wait before aborting idle transactions sent by this producer. This is only relevant if a TransactionalId has been defined.
 *
 * @var int
 */
protected $transactionTimeoutMs = 0;

/**
 * The producer id. This is used to disambiguate requests if a transactional id is reused following its expiration.
 *
 * @var int
 */
protected $producerId = -1;

/**
 * The producer's current epoch. This will be checked against the producer epoch on the broker, and the request will return an error if they do not match.
 *
 * @var int
 */
protected $producerEpoch = -1;

/**
 * True if the client wants to enable two-phase commit (2PC) protocol for transactions.
 *
 * @var bool
 */
protected $enable2Pc = false;

/**
 * True if the client wants to keep the currently ongoing transaction instead of aborting it.
 *
 * @var bool
 */
protected $keepPreparedTxn = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [0,1,2,3,4,5,6], [], null),
new ProtocolField('transactionTimeoutMs', 'int32', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('producerId', 'int64', false, [3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('enable2Pc', 'bool', false, [6], [2,3,4,5,6], [], [], null),
new ProtocolField('keepPreparedTxn', 'bool', false, [6], [2,3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 22;
}

public function getMaxSupportedVersion(): int
{
    return 6;
}

public function getFlexibleVersions(): array
{
    return [2,3,4,5,6];
}


    /**
 * @return string|null
 */
public function getTransactionalId(): ?string
{
    return $this->transactionalId;
}

/**
 * @param string|null $transactionalId
 *
 * @return self
 */
public function setTransactionalId(?string $transactionalId): self
{
    $this->transactionalId = $transactionalId;

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
public function getEnable2Pc(): bool
{
    return $this->enable2Pc;
}

/**
 * @param bool $enable2Pc
 *
 * @return self
 */
public function setEnable2Pc(bool $enable2Pc): self
{
    $this->enable2Pc = $enable2Pc;

    return $this;
}
/**
 * @return bool
 */
public function getKeepPreparedTxn(): bool
{
    return $this->keepPreparedTxn;
}

/**
 * @param bool $keepPreparedTxn
 *
 * @return self
 */
public function setKeepPreparedTxn(bool $keepPreparedTxn): self
{
    $this->keepPreparedTxn = $keepPreparedTxn;

    return $this;
}

}