<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\LeaveGroup;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class LeaveGroupResponse extends AbstractResponse
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
 * List of leaving member responses.
 *
 * @var MemberResponse[]
 */
protected $members = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5], [4,5], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5], [4,5], [], [], null),
new ProtocolField('members', MemberResponse::class, true, [3,4,5], [4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 13;
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
 * @return MemberResponse[]
 */
public function getMembers(): array
{
    return $this->members;
}

/**
 * @param MemberResponse[] $members
 *
 * @return self
 */
public function setMembers(array $members): self
{
    $this->members = $members;

    return $this;
}

}