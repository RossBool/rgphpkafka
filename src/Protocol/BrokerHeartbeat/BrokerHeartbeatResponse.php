<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\BrokerHeartbeat;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class BrokerHeartbeatResponse extends AbstractResponse
{
    /**
 * Duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
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
 * True if the broker has approximately caught up with the latest metadata.
 *
 * @var bool
 */
protected $isCaughtUp = false;

/**
 * True if the broker is fenced.
 *
 * @var bool
 */
protected $isFenced = true;

/**
 * True if the broker should proceed with its shutdown.
 *
 * @var bool
 */
protected $shouldShutDown = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('isCaughtUp', 'bool', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('isFenced', 'bool', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('shouldShutDown', 'bool', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 63;
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
 * @return bool
 */
public function getIsCaughtUp(): bool
{
    return $this->isCaughtUp;
}

/**
 * @param bool $isCaughtUp
 *
 * @return self
 */
public function setIsCaughtUp(bool $isCaughtUp): self
{
    $this->isCaughtUp = $isCaughtUp;

    return $this;
}
/**
 * @return bool
 */
public function getIsFenced(): bool
{
    return $this->isFenced;
}

/**
 * @param bool $isFenced
 *
 * @return self
 */
public function setIsFenced(bool $isFenced): self
{
    $this->isFenced = $isFenced;

    return $this;
}
/**
 * @return bool
 */
public function getShouldShutDown(): bool
{
    return $this->shouldShutDown;
}

/**
 * @param bool $shouldShutDown
 *
 * @return self
 */
public function setShouldShutDown(bool $shouldShutDown): self
{
    $this->shouldShutDown = $shouldShutDown;

    return $this;
}

}