<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Member extends AbstractStruct
{
    /**
 * The member ID.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The member epoch.
 *
 * @var int
 */
protected $memberEpoch = 0;

/**
 * The member instance ID for static membership.
 *
 * @var string|null
 */
protected $instanceId = null;

/**
 * The rack ID.
 *
 * @var string|null
 */
protected $rackId = null;

/**
 * The client ID.
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
 * The epoch of the topology on the client.
 *
 * @var int
 */
protected $topologyEpoch = 0;

/**
 * Identity of the streams instance that may have multiple clients. 
 *
 * @var string
 */
protected $processId = '';

/**
 * User-defined endpoint for Interactive Queries. Null if not defined for this client.
 *
 * @var Endpoint|null
 */
protected $userEndpoint = null;

/**
 * Used for rack-aware assignment algorithm.
 *
 * @var KeyValue[]
 */
protected $clientTags = [];

/**
 * Cumulative changelog offsets for tasks.
 *
 * @var TaskOffset[]
 */
protected $taskOffsets = [];

/**
 * Cumulative changelog end offsets for tasks.
 *
 * @var TaskOffset[]
 */
protected $taskEndOffsets = [];

/**
 * The current assignment.
 *
 * @var Assignment
 */
protected $assignment = null;

/**
 * The target assignment.
 *
 * @var Assignment
 */
protected $targetAssignment = null;

/**
 * True for classic members that have not been upgraded yet.
 *
 * @var bool
 */
protected $isClassic = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('memberEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('instanceId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('rackId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('clientId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('clientHost', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('topologyEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('processId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('userEndpoint', Endpoint::class, false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('clientTags', KeyValue::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('taskOffsets', TaskOffset::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('taskEndOffsets', TaskOffset::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('assignment', Assignment::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('targetAssignment', Assignment::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('isClassic', 'bool', false, [0,1], [0,1], [], [], null),

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
 * @return int
 */
public function getMemberEpoch(): int
{
    return $this->memberEpoch;
}

/**
 * @param int $memberEpoch
 *
 * @return self
 */
public function setMemberEpoch(int $memberEpoch): self
{
    $this->memberEpoch = $memberEpoch;

    return $this;
}
/**
 * @return string|null
 */
public function getInstanceId(): ?string
{
    return $this->instanceId;
}

/**
 * @param string|null $instanceId
 *
 * @return self
 */
public function setInstanceId(?string $instanceId): self
{
    $this->instanceId = $instanceId;

    return $this;
}
/**
 * @return string|null
 */
public function getRackId(): ?string
{
    return $this->rackId;
}

/**
 * @param string|null $rackId
 *
 * @return self
 */
public function setRackId(?string $rackId): self
{
    $this->rackId = $rackId;

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
 * @return int
 */
public function getTopologyEpoch(): int
{
    return $this->topologyEpoch;
}

/**
 * @param int $topologyEpoch
 *
 * @return self
 */
public function setTopologyEpoch(int $topologyEpoch): self
{
    $this->topologyEpoch = $topologyEpoch;

    return $this;
}
/**
 * @return string
 */
public function getProcessId(): string
{
    return $this->processId;
}

/**
 * @param string $processId
 *
 * @return self
 */
public function setProcessId(string $processId): self
{
    $this->processId = $processId;

    return $this;
}
/**
 * @return Endpoint|null
 */
public function getUserEndpoint(): ?Endpoint
{
    return $this->userEndpoint;
}

/**
 * @param Endpoint|null $userEndpoint
 *
 * @return self
 */
public function setUserEndpoint(?Endpoint $userEndpoint): self
{
    $this->userEndpoint = $userEndpoint;

    return $this;
}
/**
 * @return KeyValue[]
 */
public function getClientTags(): array
{
    return $this->clientTags;
}

/**
 * @param KeyValue[] $clientTags
 *
 * @return self
 */
public function setClientTags(array $clientTags): self
{
    $this->clientTags = $clientTags;

    return $this;
}
/**
 * @return TaskOffset[]
 */
public function getTaskOffsets(): array
{
    return $this->taskOffsets;
}

/**
 * @param TaskOffset[] $taskOffsets
 *
 * @return self
 */
public function setTaskOffsets(array $taskOffsets): self
{
    $this->taskOffsets = $taskOffsets;

    return $this;
}
/**
 * @return TaskOffset[]
 */
public function getTaskEndOffsets(): array
{
    return $this->taskEndOffsets;
}

/**
 * @param TaskOffset[] $taskEndOffsets
 *
 * @return self
 */
public function setTaskEndOffsets(array $taskEndOffsets): self
{
    $this->taskEndOffsets = $taskEndOffsets;

    return $this;
}
/**
 * @return Assignment
 */
public function getAssignment(): Assignment
{
    return $this->assignment;
}

/**
 * @param Assignment $assignment
 *
 * @return self
 */
public function setAssignment(Assignment $assignment): self
{
    $this->assignment = $assignment;

    return $this;
}
/**
 * @return Assignment
 */
public function getTargetAssignment(): Assignment
{
    return $this->targetAssignment;
}

/**
 * @param Assignment $targetAssignment
 *
 * @return self
 */
public function setTargetAssignment(Assignment $targetAssignment): self
{
    $this->targetAssignment = $targetAssignment;

    return $this;
}
/**
 * @return bool
 */
public function getIsClassic(): bool
{
    return $this->isClassic;
}

/**
 * @param bool $isClassic
 *
 * @return self
 */
public function setIsClassic(bool $isClassic): self
{
    $this->isClassic = $isClassic;

    return $this;
}

}