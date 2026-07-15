<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateDelegationToken;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class CreateDelegationTokenRequest extends AbstractRequest
{
    /**
 * The principal type of the owner of the token. If it's null it defaults to the token request principal.
 *
 * @var string|null
 */
protected $ownerPrincipalType = null;

/**
 * The principal name of the owner of the token. If it's null it defaults to the token request principal.
 *
 * @var string|null
 */
protected $ownerPrincipalName = null;

/**
 * A list of those who are allowed to renew this token before it expires.
 *
 * @var CreatableRenewers[]
 */
protected $renewers = [];

/**
 * The maximum lifetime of the token in milliseconds, or -1 to use the server side default.
 *
 * @var int
 */
protected $maxLifetimeMs = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('ownerPrincipalType', 'string', false, [3], [2,3], [3], [], null),
new ProtocolField('ownerPrincipalName', 'string', false, [3], [2,3], [3], [], null),
new ProtocolField('renewers', CreatableRenewers::class, true, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('maxLifetimeMs', 'int64', false, [0,1,2,3], [2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 38;
}

public function getMaxSupportedVersion(): int
{
    return 3;
}

public function getFlexibleVersions(): array
{
    return [2,3];
}


    /**
 * @return string|null
 */
public function getOwnerPrincipalType(): ?string
{
    return $this->ownerPrincipalType;
}

/**
 * @param string|null $ownerPrincipalType
 *
 * @return self
 */
public function setOwnerPrincipalType(?string $ownerPrincipalType): self
{
    $this->ownerPrincipalType = $ownerPrincipalType;

    return $this;
}
/**
 * @return string|null
 */
public function getOwnerPrincipalName(): ?string
{
    return $this->ownerPrincipalName;
}

/**
 * @param string|null $ownerPrincipalName
 *
 * @return self
 */
public function setOwnerPrincipalName(?string $ownerPrincipalName): self
{
    $this->ownerPrincipalName = $ownerPrincipalName;

    return $this;
}
/**
 * @return CreatableRenewers[]
 */
public function getRenewers(): array
{
    return $this->renewers;
}

/**
 * @param CreatableRenewers[] $renewers
 *
 * @return self
 */
public function setRenewers(array $renewers): self
{
    $this->renewers = $renewers;

    return $this;
}
/**
 * @return int
 */
public function getMaxLifetimeMs(): int
{
    return $this->maxLifetimeMs;
}

/**
 * @param int $maxLifetimeMs
 *
 * @return self
 */
public function setMaxLifetimeMs(int $maxLifetimeMs): self
{
    $this->maxLifetimeMs = $maxLifetimeMs;

    return $this;
}

}