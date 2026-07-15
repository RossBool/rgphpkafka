<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\InitProducerId;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class InitProducerIdResponse extends AbstractResponse
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
 * The current producer id.
 *
 * @var int
 */
protected $producerId = -1;

/**
 * The current epoch associated with the producer id.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * The producer id for ongoing transaction when KeepPreparedTxn is used, -1 if there is no transaction ongoing.
 *
 * @var int
 */
protected $ongoingTxnProducerId = -1;

/**
 * The epoch associated with the  producer id for ongoing transaction when KeepPreparedTxn is used, -1 if there is no transaction ongoing.
 *
 * @var int
 */
protected $ongoingTxnProducerEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('producerId', 'int64', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [0,1,2,3,4,5,6], [2,3,4,5,6], [], [], null),
new ProtocolField('ongoingTxnProducerId', 'int64', false, [6], [2,3,4,5,6], [], [], null),
new ProtocolField('ongoingTxnProducerEpoch', 'int16', false, [6], [2,3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 22;
}

public function getFlexibleVersions(): array
{
    return [2,3,4,5,6];
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
public function getOngoingTxnProducerId(): int
{
    return $this->ongoingTxnProducerId;
}

/**
 * @param int $ongoingTxnProducerId
 *
 * @return self
 */
public function setOngoingTxnProducerId(int $ongoingTxnProducerId): self
{
    $this->ongoingTxnProducerId = $ongoingTxnProducerId;

    return $this;
}
/**
 * @return int
 */
public function getOngoingTxnProducerEpoch(): int
{
    return $this->ongoingTxnProducerEpoch;
}

/**
 * @param int $ongoingTxnProducerEpoch
 *
 * @return self
 */
public function setOngoingTxnProducerEpoch(int $ongoingTxnProducerEpoch): self
{
    $this->ongoingTxnProducerEpoch = $ongoingTxnProducerEpoch;

    return $this;
}

}