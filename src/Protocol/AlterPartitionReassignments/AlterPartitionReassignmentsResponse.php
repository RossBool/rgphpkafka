<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterPartitionReassignments;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterPartitionReassignmentsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The option indicating whether changing the replication factor of any given partition as part of the request was allowed.
 *
 * @var bool
 */
protected $allowReplicationFactorChange = true;

/**
 * The top-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The top-level error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The responses to topics to reassign.
 *
 * @var ReassignableTopicResponse[]
 */
protected $responses = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('allowReplicationFactorChange', 'bool', false, [1], [0,1], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('responses', ReassignableTopicResponse::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 45;
}

public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return bool
 */
public function getAllowReplicationFactorChange(): bool
{
    return $this->allowReplicationFactorChange;
}

/**
 * @param bool $allowReplicationFactorChange
 *
 * @return self
 */
public function setAllowReplicationFactorChange(bool $allowReplicationFactorChange): self
{
    $this->allowReplicationFactorChange = $allowReplicationFactorChange;

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
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
}
/**
 * @return ReassignableTopicResponse[]
 */
public function getResponses(): array
{
    return $this->responses;
}

/**
 * @param ReassignableTopicResponse[] $responses
 *
 * @return self
 */
public function setResponses(array $responses): self
{
    $this->responses = $responses;

    return $this;
}

}