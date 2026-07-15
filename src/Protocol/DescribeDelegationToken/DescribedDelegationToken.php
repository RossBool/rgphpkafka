<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeDelegationToken;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribedDelegationToken extends AbstractStruct
{
    /**
 * The token principal type.
 *
 * @var string
 */
protected $principalType = '';

/**
 * The token principal name.
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
 * The token issue timestamp in milliseconds.
 *
 * @var int
 */
protected $issueTimestamp = 0;

/**
 * The token expiry timestamp in milliseconds.
 *
 * @var int
 */
protected $expiryTimestamp = 0;

/**
 * The token maximum timestamp length in milliseconds.
 *
 * @var int
 */
protected $maxTimestamp = 0;

/**
 * The token ID.
 *
 * @var string
 */
protected $tokenId = '';

/**
 * The token HMAC.
 *
 * @var string
 */
protected $hmac = '';

/**
 * Those who are able to renew this token before it expires.
 *
 * @var DescribedDelegationTokenRenewer[]
 */
protected $renewers = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('principalType', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('principalName', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('tokenRequesterPrincipalType', 'string', false, [3], [2,3], [], [], null),
new ProtocolField('tokenRequesterPrincipalName', 'string', false, [3], [2,3], [], [], null),
new ProtocolField('issueTimestamp', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('expiryTimestamp', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('maxTimestamp', 'int64', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('tokenId', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('hmac', 'bytes', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('renewers', DescribedDelegationTokenRenewer::class, true, [0,1,2,3], [2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3];
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
public function getIssueTimestamp(): int
{
    return $this->issueTimestamp;
}

/**
 * @param int $issueTimestamp
 *
 * @return self
 */
public function setIssueTimestamp(int $issueTimestamp): self
{
    $this->issueTimestamp = $issueTimestamp;

    return $this;
}
/**
 * @return int
 */
public function getExpiryTimestamp(): int
{
    return $this->expiryTimestamp;
}

/**
 * @param int $expiryTimestamp
 *
 * @return self
 */
public function setExpiryTimestamp(int $expiryTimestamp): self
{
    $this->expiryTimestamp = $expiryTimestamp;

    return $this;
}
/**
 * @return int
 */
public function getMaxTimestamp(): int
{
    return $this->maxTimestamp;
}

/**
 * @param int $maxTimestamp
 *
 * @return self
 */
public function setMaxTimestamp(int $maxTimestamp): self
{
    $this->maxTimestamp = $maxTimestamp;

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
 * @return DescribedDelegationTokenRenewer[]
 */
public function getRenewers(): array
{
    return $this->renewers;
}

/**
 * @param DescribedDelegationTokenRenewer[] $renewers
 *
 * @return self
 */
public function setRenewers(array $renewers): self
{
    $this->renewers = $renewers;

    return $this;
}

}