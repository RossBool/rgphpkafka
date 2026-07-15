<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\RenewDelegationToken;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class RenewDelegationTokenRequest extends AbstractRequest
{
    /**
 * The HMAC of the delegation token to be renewed.
 *
 * @var string
 */
protected $hmac = '';

/**
 * The renewal time period in milliseconds.
 *
 * @var int
 */
protected $renewPeriodMs = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('hmac', 'bytes', false, [0,1,2], [2], [], [], null),
new ProtocolField('renewPeriodMs', 'int64', false, [0,1,2], [2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 39;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [2];
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
public function getRenewPeriodMs(): int
{
    return $this->renewPeriodMs;
}

/**
 * @param int $renewPeriodMs
 *
 * @return self
 */
public function setRenewPeriodMs(int $renewPeriodMs): self
{
    $this->renewPeriodMs = $renewPeriodMs;

    return $this;
}

}