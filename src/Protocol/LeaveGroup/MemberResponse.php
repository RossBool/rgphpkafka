<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\LeaveGroup;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MemberResponse extends AbstractStruct
{
    /**
 * The member ID to remove from the group.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The group instance ID to remove from the group.
 *
 * @var string|null
 */
protected $groupInstanceId = null;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [3,4,5], [4,5], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [3,4,5], [4,5], [3,4,5], [], null),
new ProtocolField('errorCode', 'int16', false, [3,4,5], [4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4,5];
}


    /**
 * @return string
 */
public function getMemberId(): string
{
    return $this->memberId;
}

/**
 * @param string $memberId
 *
 * @return self
 */
public function setMemberId(string $memberId): self
{
    $this->memberId = $memberId;

    return $this;
}
/**
 * @return string|null
 */
public function getGroupInstanceId(): ?string
{
    return $this->groupInstanceId;
}

/**
 * @param string|null $groupInstanceId
 *
 * @return self
 */
public function setGroupInstanceId(?string $groupInstanceId): self
{
    $this->groupInstanceId = $groupInstanceId;

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

}