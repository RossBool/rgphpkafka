<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\JoinGroup;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class JoinGroupResponseMember extends AbstractStruct
{
    /**
 * The group member ID.
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
 * The group member metadata.
 *
 * @var string
 */
protected $metadata = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('memberId', 'string', false, [0,1,2,3,4,5,6,7,8,9], [6,7,8,9], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [5,6,7,8,9], [6,7,8,9], [5,6,7,8,9], [], null),
new ProtocolField('metadata', 'bytes', false, [0,1,2,3,4,5,6,7,8,9], [6,7,8,9], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9];
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
public function getMetadata(): string
{
    return $this->metadata;
}

/**
 * @param string $metadata
 *
 * @return self
 */
public function setMetadata(string $metadata): self
{
    $this->metadata = $metadata;

    return $this;
}

}