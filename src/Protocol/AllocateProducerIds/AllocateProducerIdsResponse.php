<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AllocateProducerIds;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class AllocateProducerIdsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The top level response error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The first producer ID in this range, inclusive.
 *
 * @var int
 */
protected $producerIdStart = 0;

/**
 * The number of producer IDs in this range.
 *
 * @var int
 */
protected $producerIdLen = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('producerIdStart', 'int64', false, [0], [0], [], [], null),
new ProtocolField('producerIdLen', 'int32', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 67;
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
public function getProducerIdStart(): int
{
    return $this->producerIdStart;
}

/**
 * @param int $producerIdStart
 *
 * @return self
 */
public function setProducerIdStart(int $producerIdStart): self
{
    $this->producerIdStart = $producerIdStart;

    return $this;
}
/**
 * @return int
 */
public function getProducerIdLen(): int
{
    return $this->producerIdLen;
}

/**
 * @param int $producerIdLen
 *
 * @return self
 */
public function setProducerIdLen(int $producerIdLen): self
{
    $this->producerIdLen = $producerIdLen;

    return $this;
}

}