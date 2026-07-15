<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class FetchResponse extends AbstractResponse
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
 * The fetch session ID, or 0 if this is not part of a fetch session.
 *
 * @var int
 */
protected $sessionId = 0;

/**
 * The response topics.
 *
 * @var FetchableTopicResponse[]
 */
protected $responses = [];

/**
 * Endpoints for all current-leaders enumerated in PartitionData, with errors NOT_LEADER_OR_FOLLOWER & FENCED_LEADER_EPOCH.
 *
 * @var NodeEndpoint[]
 */
protected $nodeEndpoints = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('errorCode', 'int16', false, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('sessionId', 'int32', false, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('responses', FetchableTopicResponse::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('nodeEndpoints', NodeEndpoint::class, true, [16,17,18], [12,13,14,15,16,17,18], [], [16,17,18], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
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
public function getSessionId(): int
{
    return $this->sessionId;
}

/**
 * @param int $sessionId
 *
 * @return self
 */
public function setSessionId(int $sessionId): self
{
    $this->sessionId = $sessionId;

    return $this;
}
/**
 * @return FetchableTopicResponse[]
 */
public function getResponses(): array
{
    return $this->responses;
}

/**
 * @param FetchableTopicResponse[] $responses
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