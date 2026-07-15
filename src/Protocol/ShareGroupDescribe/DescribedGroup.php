<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareGroupDescribe;

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
 * The top-level error message, or null if there was no error.
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
 * The group epoch.
 *
 * @var int
 */
protected $groupEpoch = 0;

/**
 * The assignment epoch.
 *
 * @var int
 */
protected $assignmentEpoch = 0;

/**
 * The selected assignor.
 *
 * @var string
 */
protected $assignorName = '';

/**
 * The members.
 *
 * @var Member[]
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
            new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('groupId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('groupState', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('groupEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('assignmentEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('assignorName', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('members', Member::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('authorizedOperations', 'int32', false, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return int
 */
public function getGroupEpoch(): int
{
    return $this->groupEpoch;
}

/**
 * @param int $groupEpoch
 *
 * @return self
 */
public function setGroupEpoch(int $groupEpoch): self
{
    $this->groupEpoch = $groupEpoch;

    return $this;
}
/**
 * @return int
 */
public function getAssignmentEpoch(): int
{
    return $this->assignmentEpoch;
}

/**
 * @param int $assignmentEpoch
 *
 * @return self
 */
public function setAssignmentEpoch(int $assignmentEpoch): self
{
    $this->assignmentEpoch = $assignmentEpoch;

    return $this;
}
/**
 * @return string
 */
public function getAssignorName(): string
{
    return $this->assignorName;
}

/**
 * @param string $assignorName
 *
 * @return self
 */
public function setAssignorName(string $assignorName): self
{
    $this->assignorName = $assignorName;

    return $this;
}
/**
 * @return Member[]
 */
public function getMembers(): array
{
    return $this->members;
}

/**
 * @param Member[] $members
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