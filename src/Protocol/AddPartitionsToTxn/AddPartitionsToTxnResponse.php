<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnResponse extends AbstractResponse
{
    /**
 * Duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The response top level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * Results categorized by transactional ID.
 *
 * @var AddPartitionsToTxnResult[]
 */
protected $resultsByTransaction = [];

/**
 * The results for each topic.
 *
 * @var AddPartitionsToTxnTopicResult[]
 */
protected $resultsByTopicV3AndBelow = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('errorCode', 'int16', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('resultsByTransaction', AddPartitionsToTxnResult::class, true, [4,5], [3,4,5], [], [], null),
new ProtocolField('resultsByTopicV3AndBelow', AddPartitionsToTxnTopicResult::class, true, [0,1,2,3], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 24;
}

public function getFlexibleVersions(): array
{
    return [3,4,5];
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
 * @return AddPartitionsToTxnResult[]
 */
public function getResultsByTransaction(): array
{
    return $this->resultsByTransaction;
}

/**
 * @param AddPartitionsToTxnResult[] $resultsByTransaction
 *
 * @return self
 */
public function setResultsByTransaction(array $resultsByTransaction): self
{
    $this->resultsByTransaction = $resultsByTransaction;

    return $this;
}
/**
 * @return AddPartitionsToTxnTopicResult[]
 */
public function getResultsByTopicV3AndBelow(): array
{
    return $this->resultsByTopicV3AndBelow;
}

/**
 * @param AddPartitionsToTxnTopicResult[] $resultsByTopicV3AndBelow
 *
 * @return self
 */
public function setResultsByTopicV3AndBelow(array $resultsByTopicV3AndBelow): self
{
    $this->resultsByTopicV3AndBelow = $resultsByTopicV3AndBelow;

    return $this;
}

}