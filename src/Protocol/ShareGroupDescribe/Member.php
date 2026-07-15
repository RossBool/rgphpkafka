<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareGroupDescribe;

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
 * The current assignment.
 *
 * @var Assignment
 */
protected $assignment = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('rackId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('memberEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('clientId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('clientHost', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('subscribedTopicNames', 'string', true, [0,1], [0,1], [], [], null),
new ProtocolField('assignment', Assignment::class, false, [0,1], [0,1], [], [], null),

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

}