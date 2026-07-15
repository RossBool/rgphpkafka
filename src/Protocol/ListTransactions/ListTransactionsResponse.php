<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListTransactions;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ListTransactionsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * Set of state filters provided in the request which were unknown to the transaction coordinator.
 *
 * @var string[]
 */
protected $unknownStateFilters = [];

/**
 * The current state of the transaction for the transactional id.
 *
 * @var TransactionState[]
 */
protected $transactionStates = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('unknownStateFilters', 'string', true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('transactionStates', TransactionState::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 66;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

    return $this;
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
 * @return string[]
 */
public function getUnknownStateFilters(): array
{
    return $this->unknownStateFilters;
}

/**
 * @param string[] $unknownStateFilters
 *
 * @return self
 */
public function setUnknownStateFilters(array $unknownStateFilters): self
{
    $this->unknownStateFilters = $unknownStateFilters;

    return $this;
}
/**
 * @return TransactionState[]
 */
public function getTransactionStates(): array
{
    return $this->transactionStates;
}

/**
 * @param TransactionState[] $transactionStates
 *
 * @return self
 */
public function setTransactionStates(array $transactionStates): self
{
    $this->transactionStates = $transactionStates;

    return $this;
}

}