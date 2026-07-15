<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ConsumerGroupDescribe;

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
 * The member instance ID.
 *
 * @var string|null
 */
protected $instanceId = null;

/**
 * The member rack ID.
 *
 * @var string|null
 */
protected $rackId = null;

/**
 * The current member epoch.
 *
 * @var int
 */
protected $memberEpoch = 0;

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
 * The subscribed topic names.
 *
 * @var string[]
 */
protected $subscribedTopicNames = [];

/**
 * the subscribed topic regex otherwise or null of not provided.
 *
 * @var string|null
 */
protected $subscribedTopicRegex = null;

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
 * -1 for unknown. 0 for classic member. +1 for consumer member.
 *
 * @var int
 */
protected $memberType = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('instanceId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('rackId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('memberEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('clientId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('clientHost', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('subscribedTopicNames', 'string', true, [0,1], [0,1], [], [], null),
new ProtocolField('subscribedTopicRegex', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('assignment', Assignment::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('targetAssignment', Assignment::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('memberType', 'int8', false, [1], [0,1], [], [], null),

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
 * @return string[]
 */
public function getSubscribedTopicNames(): array
{
    return $this->subscribedTopicNames;
}

/**
 * @param string[] $subscribedTopicNames
 *
 * @return self
 */
public function setSubscribedTopicNames(array $subscribedTopicNames): self
{
    $this->subscribedTopicNames = $subscribedTopicNames;

    return $this;
}
/**
 * @return string|null
 */
public function getSubscribedTopicRegex(): ?string
{
    return $this->subscribedTopicRegex;
}

/**
 * @param string|null $subscribedTopicRegex
 *
 * @return self
 */
public function setSubscribedTopicRegex(?string $subscribedTopicRegex): self
{
    $this->subscribedTopicRegex = $subscribedTopicRegex;

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
 * @return int
 */
public function getMemberType(): int
{
    return $this->memberType;
}

/**
 * @param int $memberType
 *
 * @return self
 */
public function setMemberType(int $memberType): self
{
    $this->memberType = $memberType;

    return $this;
}

}