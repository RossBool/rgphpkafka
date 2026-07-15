<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeGroups;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribedGroup extends AbstractStruct
{
    /**
 * The describe error, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The describe error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The group ID string.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The group state string, or the empty string.
 *
 * @var string
 */
protected $groupState = '';

/**
 * The group protocol type, or the empty string.
 *
 * @var string
 */
protected $protocolType = '';

/**
 * The group protocol data, or the empty string.
 *
 * @var string
 */
protected $protocolData = '';

/**
 * The group members.
 *
 * @var DescribedGroupMember[]
 */
protected $members = [];

/**
 * 32-bit bitfield to represent authorized operations for this group.
 *
 * @var int
 */
protected $authorizedOperations = -2147483648;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('errorMessage', 'string', false, [6], [5,6], [6], [], null),
new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('groupState', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('protocolType', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('protocolData', 'string', false, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('members', DescribedGroupMember::class, true, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('authorizedOperations', 'int32', false, [3,4,5,6], [5,6], [], [], null),

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
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
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
public function getGroupState(): string
{
    return $this->groupState;
}

/**
 * @param string $groupState
 *
 * @return self
 */
public function setGroupState(string $groupState): self
{
    $this->groupState = $groupState;

    return $this;
}
/**
 * @return string
 */
public function getProtocolType(): string
{
    return $this->protocolType;
}

/**
 * @param string $protocolType
 *
 * @return self
 */
public function setProtocolType(string $protocolType): self
{
    $this->protocolType = $protocolType;

    return $this;
}
/**
 * @return string
 */
public function getProtocolData(): string
{
    return $this->protocolData;
}

/**
 * @param string $protocolData
 *
 * @return self
 */
public function setProtocolData(string $protocolData): self
{
    $this->protocolData = $protocolData;

    return $this;
}
/**
 * @return DescribedGroupMember[]
 */
public function getMembers(): array
{
    return $this->members;
}

/**
 * @param DescribedGroupMember[] $members
 *
 * @return self
 */
public function setMembers(array $members): self
{
    $this->members = $members;

    return $this;
}
/**
 * @return int
 */
public function getAuthorizedOperations(): int
{
    return $this->authorizedOperations;
}

/**
 * @param int $authorizedOperations
 *
 * @return self
 */
public function setAuthorizedOperations(int $authorizedOperations): self
{
    $this->authorizedOperations = $authorizedOperations;

    return $this;
}

}