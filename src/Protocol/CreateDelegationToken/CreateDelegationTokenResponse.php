<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateDelegationToken;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class CreateDelegationTokenResponse extends AbstractResponse
{
    /**
 * The top-level error, or zero if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The principal type of the token owner.
 *
 * @var string
 */
protected $principalType = '';

/**
 * The name of the token owner.
 *
 * @var string
 */
protected $principalName = '';

/**
 * The principal type of the requester of the token.
 *
 * @var string
 */
protected $tokenRequesterPrincipalType = '';

/**
 * The principal type of the requester of the token.
 *
 * @var string
 */
protected $tokenRequesterPrincipalName = '';

/**
 * When this token was generated.
 *
 * @var int
 */
protected $issueTimestampMs = 0;

/**
 * When this token expires.
 *
 * @var int
 */
protected $expiryTimestampMs = 0;

/**
 * The maximum lifetime of this token.
 *
 * @var int
 */
protected $maxTimestampMs = 0;

/**
 * The token UUID.
 *
 * @var string
 */
protected $tokenId = '';

/**
 * HMAC of the delegation token.
 *
 * @var string
 */
protected $hmac = '';

/**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('principalType', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('principalName', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('tokenRequesterPrincipalType', 'string', false, [3], [2,3], [], [], null),
new ProtocolField('tokenRequesterPrincipalName', 'string', false, [3], [2,3], [], [], null),
new ProtocolField('issueTimestampMs', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('expiryTimestampMs', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('maxTimestampMs', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('tokenId', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('hmac', 'bytes', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('throttleTimeMs', 'int32', false, [0,1,2,3], [2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 38;
}

public function getFlexibleVersions(): array
{
    return [2,3];
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
 * @return string
 */
public function getPrincipalType(): string
{
    return $this->principalType;
}

/**
 * @param string $principalType
 *
 * @return self
 */
public function setPrincipalType(string $principalType): self
{
    $this->principalType = $principalType;

    return $this;
}
/**
 * @return string
 */
public function getPrincipalName(): string
{
    return $this->principalName;
}

/**
 * @param string $principalName
 *
 * @return self
 */
public function setPrincipalName(string $principalName): self
{
    $this->principalName = $principalName;

    return $this;
}
/**
 * @return string
 */
public function getTokenRequesterPrincipalType(): string
{
    return $this->tokenRequesterPrincipalType;
}

/**
 * @param string $tokenRequesterPrincipalType
 *
 * @return self
 */
public function setTokenRequesterPrincipalType(string $tokenRequesterPrincipalType): self
{
    $this->tokenRequesterPrincipalType = $tokenRequesterPrincipalType;

    return $this;
}
/**
 * @return string
 */
public function getTokenRequesterPrincipalName(): string
{
    return $this->tokenRequesterPrincipalName;
}

/**
 * @param string $tokenRequesterPrincipalName
 *
 * @return self
 */
public function setTokenRequesterPrincipalName(string $tokenRequesterPrincipalName): self
{
    $this->tokenRequesterPrincipalName = $tokenRequesterPrincipalName;

    return $this;
}
/**
 * @return int
 */
public function getIssueTimestampMs(): int
{
    return $this->issueTimestampMs;
}

/**
 * @param int $issueTimestampMs
 *
 * @return self
 */
public function setIssueTimestampMs(int $issueTimestampMs): self
{
    $this->issueTimestampMs = $issueTimestampMs;

    return $this;
}
/**
 * @return int
 */
public function getExpiryTimestampMs(): int
{
    return $this->expiryTimestampMs;
}

/**
 * @param int $expiryTimestampMs
 *
 * @return self
 */
public function setExpiryTimestampMs(int $expiryTimestampMs): self
{
    $this->expiryTimestampMs = $expiryTimestampMs;

    return $this;
}
/**
 * @return int
 */
public function getMaxTimestampMs(): int
{
    return $this->maxTimestampMs;
}

/**
 * @param int $maxTimestampMs
 *
 * @return self
 */
public function setMaxTimestampMs(int $maxTimestampMs): self
{
    $this->maxTimestampMs = $maxTimestampMs;

    return $this;
}
/**
 * @return string
 */
public function getTokenId(): string
{
    return $this->tokenId;
}

/**
 * @param string $tokenId
 *
 * @return self
 */
public function setTokenId(string $tokenId): self
{
    $this->tokenId = $tokenId;

    return $this;
}
/**
 * @return string
 */
public function getHmac(): string
{
    return $this->hmac;
}

/**
 * @param string $hmac
 *
 * @return self
 */
public function setHmac(string $hmac): self
{
    $this->hmac = $hmac;

    return $this;
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

}