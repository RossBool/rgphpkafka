<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeGroups;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribedGroupMember extends AbstractStruct
{
    /**
 * The member id.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The unique identifier of the consumer instance provided by end user.
 *
 * @var string|null
 */
protected $groupInstanceId = null;

/**
 * The client ID used in the member's latest join group request.
 *
 * @var string
 */
protected $clientId = '';

/**
 * The client host.
 *
 * @var string
 */
protected $clientHost = '';

/**
 * The metadata corresponding to the current group protocol in use.
 *
 * @var string
 */
protected $memberMetadata = '';

/**
 * The current assignment provided by the group leader.
 *
 * @var string
 */
protected $memberAssignment = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [4,5,6], [5,6], [4,5,6], [], null),
new ProtocolField('clientId', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('clientHost', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('memberMetadata', 'bytes', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('memberAssignment', 'bytes', false, [0,1,2,3,4,5,6], [5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [5,6];
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
 * @return string
 */
public function getClientId(): string
{
    return $this->clientId;
}

/**
 * @param string $clientId
 *
 * @return self
 */
public function setClientId(string $clientId): self
{
    $this->clientId = $clientId;

    return $this;
}
/**
 * @return string
 */
public function getClientHost(): string
{
    return $this->clientHost;
}

/**
 * @param string $clientHost
 *
 * @return self
 */
public function setClientHost(string $clientHost): self
{
    $this->clientHost = $clientHost;

    return $this;
}
/**
 * @return string
 */
public function getMemberMetadata(): string
{
    return $this->memberMetadata;
}

/**
 * @param string $memberMetadata
 *
 * @return self
 */
public function setMemberMetadata(string $memberMetadata): self
{
    $this->memberMetadata = $memberMetadata;

    return $this;
}
/**
 * @return string
 */
public function getMemberAssignment(): string
{
    return $this->memberAssignment;
}

/**
 * @param string $memberAssignment
 *
 * @return self
 */
public function setMemberAssignment(string $memberAssignment): self
{
    $this->memberAssignment = $memberAssignment;

    return $this;
}

}