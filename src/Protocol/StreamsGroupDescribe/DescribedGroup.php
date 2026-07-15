<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

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
 * The topology metadata currently initialized for the streams application. Can be null in case of a describe error.
 *
 * @var Topology|null
 */
protected $topology = null;

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

/**
 * The full topology description for this group. Non-null if and only if TopologyDescriptionStatus is AVAILABLE (3); null otherwise.
 *
 * @var TopologyDescription|null
 */
protected $topologyDescription = null;

/**
 * The status of the topology description for this group, paired with TopologyDescription: 0=NOT_REQUESTED (client did not set IncludeTopologyDescription; TopologyDescription is null); 1=NOT_STORED (no description recorded for this group; TopologyDescription is null); 2=ERROR (broker failed to fetch the description, see broker logs; TopologyDescription is null); 3=AVAILABLE (TopologyDescription is non-null and carries the description).
 *
 * @var int
 */
protected $topologyDescriptionStatus = 0;



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
new ProtocolField('topology', Topology::class, false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('members', Member::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('authorizedOperations', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('topologyDescription', TopologyDescription::class, false, [1], [0,1], [1], [], null),
new ProtocolField('topologyDescriptionStatus', 'int8', false, [1], [0,1], [], [], null),

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
 * @return Topology|null
 */
public function getTopology(): ?Topology
{
    return $this->topology;
}

/**
 * @param Topology|null $topology
 *
 * @return self
 */
public function setTopology(?Topology $topology): self
{
    $this->topology = $topology;

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
/**
 * @return TopologyDescription|null
 */
public function getTopologyDescription(): ?TopologyDescription
{
    return $this->topologyDescription;
}

/**
 * @param TopologyDescription|null $topologyDescription
 *
 * @return self
 */
public function setTopologyDescription(?TopologyDescription $topologyDescription): self
{
    $this->topologyDescription = $topologyDescription;

    return $this;
}
/**
 * @return int
 */
public function getTopologyDescriptionStatus(): int
{
    return $this->topologyDescriptionStatus;
}

/**
 * @param int $topologyDescriptionStatus
 *
 * @return self
 */
public function setTopologyDescriptionStatus(int $topologyDescriptionStatus): self
{
    $this->topologyDescriptionStatus = $topologyDescriptionStatus;

    return $this;
}

}