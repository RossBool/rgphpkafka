<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\LeaveGroup;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MemberIdentity extends AbstractStruct
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
 * The reason why the member left the group.
 *
 * @var string|null
 */
protected $reason = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [3,4,5], [4,5], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [3,4,5], [4,5], [3,4,5], [], null),
new ProtocolField('reason', 'string', false, [5], [4,5], [5], [], null),

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
 * @return string|null
 */
public function getReason(): ?string
{
    return $this->reason;
}

/**
 * @param string|null $reason
 *
 * @return self
 */
public function setReason(?string $reason): self
{
    $this->reason = $reason;

    return $this;
}

}