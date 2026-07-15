<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ShareFetchResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The top-level response error code.
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
 * The time in milliseconds for which the acquired records are locked.
 *
 * @var int
 */
protected $acquisitionLockTimeoutMs = 0;

/**
 * The response topics.
 *
 * @var ShareFetchableTopicResponse[]
 */
protected $responses = [];

/**
 * Endpoints for all current leaders enumerated in PartitionData with error NOT_LEADER_OR_FOLLOWER.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('acquisitionLockTimeoutMs', 'int32', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('responses', ShareFetchableTopicResponse::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 78;
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
 * @return int
 */
public function getAcquisitionLockTimeoutMs(): int
{
    return $this->acquisitionLockTimeoutMs;
}

/**
 * @param int $acquisitionLockTimeoutMs
 *
 * @return self
 */
public function setAcquisitionLockTimeoutMs(int $acquisitionLockTimeoutMs): self
{
    $this->acquisitionLockTimeoutMs = $acquisitionLockTimeoutMs;

    return $this;
}
/**
 * @return ShareFetchableTopicResponse[]
 */
public function getResponses(): array
{
    return $this->responses;
}

/**
 * @param ShareFetchableTopicResponse[] $responses
 *
 * @return self
 */
public function setResponses(array $responses): self
{
    $this->responses = $responses;

    return $this;
}
/**
 * @return NodeEndpoint[]
 */
public function getNodeEndpoints(): array
{
    return $this->nodeEndpoints;
}

/**
 * @param NodeEndpoint[] $nodeEndpoints
 *
 * @return self
 */
public function setNodeEndpoints(array $nodeEndpoints): self
{
    $this->nodeEndpoints = $nodeEndpoints;

    return $this;
}

}