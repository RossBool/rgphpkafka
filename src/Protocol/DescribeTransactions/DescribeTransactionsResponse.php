<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTransactions;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeTransactionsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The current state of the transaction.
 *
 * @var TransactionState[]
 */
protected $transactionStates = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('transactionStates', TransactionState::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 65;
}

public function getFlexibleVersions(): array
{
    return [0];
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