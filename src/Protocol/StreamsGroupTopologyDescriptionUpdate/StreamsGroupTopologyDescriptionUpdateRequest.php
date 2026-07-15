<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupTopologyDescriptionUpdate;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class StreamsGroupTopologyDescriptionUpdateRequest extends AbstractRequest
{
    /**
 * The streams group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The ID of the streams group member sending the push. The broker validates that this member is still in the group; mismatches (including when the group itself has been deleted) are rejected with UNKNOWN_MEMBER_ID so the client treats itself as fenced and rejoins.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The epoch of the topology being described.
 *
 * @var int
 */
protected $topologyEpoch = 0;

/**
 * The topology description.
 *
 * @var TopologyDescription
 */
protected $topologyDescription = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0], [0], [], [], null),
new ProtocolField('memberId', 'string', false, [0], [0], [], [], null),
new ProtocolField('topologyEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('topologyDescription', TopologyDescription::class, false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 93;
}

public function getMaxSupportedVersion(): int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [0];
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
 * @return TopologyDescription
 */
public function getTopologyDescription(): TopologyDescription
{
    return $this->topologyDescription;
}

/**
 * @param TopologyDescription $topologyDescription
 *
 * @return self
 */
public function setTopologyDescription(TopologyDescription $topologyDescription): self
{
    $this->topologyDescription = $topologyDescription;

    return $this;
}

}