<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListGroups;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ListedGroup extends AbstractStruct
{
    /**
 * The group ID.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The group protocol type.
 *
 * @var string
 */
protected $protocolType = '';

/**
 * The group state name.
 *
 * @var string
 */
protected $groupState = '';

/**
 * The group type name.
 *
 * @var string
 */
protected $groupType = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('protocolType', 'string', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('groupState', 'string', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('groupType', 'string', false, [5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5];
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
public function getGroupType(): string
{
    return $this->groupType;
}

/**
 * @param string $groupType
 *
 * @return self
 */
public function setGroupType(string $groupType): self
{
    $this->groupType = $groupType;

    return $this;
}

}