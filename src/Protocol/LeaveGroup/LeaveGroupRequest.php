<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\LeaveGroup;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class LeaveGroupRequest extends AbstractRequest
{
    /**
 * The ID of the group to leave.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The member ID to remove from the group.
 *
 * @var string
 */
protected $memberId = '';

/**
 * List of leaving member identities.
 *
 * @var MemberIdentity[]
 */
protected $members = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5], [4,5], [], [], null),
new ProtocolField('memberId', 'string', false, [0,1,2], [4,5], [], [], null),
new ProtocolField('members', MemberIdentity::class, true, [3,4,5], [4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 13;
}

public function getMaxSupportedVersion(): int
{
    return 5;
}

public function getFlexibleVersions(): array
{
    return [4,5];
}


    /**
 * @return string
 */
public function getGroupId(): string
{
    return $this->groupId;
}

/**
 * @param string $groupId
 *
 * @return self
 */
public function setGroupId(string $groupId): self
{
    $this->groupId = $groupId;

    return $this;
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
 * @return MemberIdentity[]
 */
public function getMembers(): array
{
    return $this->members;
}

/**
 * @param MemberIdentity[] $members
 *
 * @return self
 */
public function setMembers(array $members): self
{
    $this->members = $members;

    return $this;
}

}