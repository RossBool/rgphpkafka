<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\SyncGroup;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class SyncGroupResponse extends AbstractResponse
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
 * The group protocol type.
 *
 * @var string|null
 */
protected $protocolType = null;

/**
 * The group protocol name.
 *
 * @var string|null
 */
protected $protocolName = null;

/**
 * The member assignment.
 *
 * @var string
 */
protected $assignment = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5], [4,5], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5], [4,5], [], [], null),
new ProtocolField('protocolType', 'string', false, [5], [4,5], [5], [], null),
new ProtocolField('protocolName', 'string', false, [5], [4,5], [5], [], null),
new ProtocolField('assignment', 'bytes', false, [0,1,2,3,4,5], [4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 14;
}

public function getFlexibleVersions(): array
{
    return [4,5];
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
 * @return string|null
 */
public function getProtocolType(): ?string
{
    return $this->protocolType;
}

/**
 * @param string|null $protocolType
 *
 * @return self
 */
public function setProtocolType(?string $protocolType): self
{
    $this->protocolType = $protocolType;

    return $this;
}
/**
 * @return string|null
 */
public function getProtocolName(): ?string
{
    return $this->protocolName;
}

/**
 * @param string|null $protocolName
 *
 * @return self
 */
public function setProtocolName(?string $protocolName): self
{
    $this->protocolName = $protocolName;

    return $this;
}
/**
 * @return string
 */
public function getAssignment(): string
{
    return $this->assignment;
}

/**
 * @param string $assignment
 *
 * @return self
 */
public function setAssignment(string $assignment): self
{
    $this->assignment = $assignment;

    return $this;
}

}