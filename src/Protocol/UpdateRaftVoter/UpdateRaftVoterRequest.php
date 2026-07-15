<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateRaftVoter;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class UpdateRaftVoterRequest extends AbstractRequest
{
    /**
 * The cluster id.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The current leader epoch of the partition, -1 for unknown leader epoch.
 *
 * @var int
 */
protected $currentLeaderEpoch = 0;

/**
 * The replica id of the voter getting updated in the topic partition.
 *
 * @var int
 */
protected $voterId = 0;

/**
 * The directory id of the voter getting updated in the topic partition.
 *
 * @var string
 */
protected $voterDirectoryId = '';

/**
 * The endpoint that can be used to communicate with the leader.
 *
 * @var Listener[]
 */
protected $listeners = [];

/**
 * The range of versions of the protocol that the replica supports.
 *
 * @var KRaftVersionFeature
 */
protected $kRaftVersionFeature = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0], [0], [0], [], null),
new ProtocolField('currentLeaderEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('voterId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('voterDirectoryId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('listeners', Listener::class, true, [0], [0], [], [], null),
new ProtocolField('kRaftVersionFeature', KRaftVersionFeature::class, false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 82;
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
 * @return string|null
 */
public function getClusterId(): ?string
{
    return $this->clusterId;
}

/**
 * @param string|null $clusterId
 *
 * @return self
 */
public function setClusterId(?string $clusterId): self
{
    $this->clusterId = $clusterId;

    return $this;
}
/**
 * @return int
 */
public function getCurrentLeaderEpoch(): int
{
    return $this->currentLeaderEpoch;
}

/**
 * @param int $currentLeaderEpoch
 *
 * @return self
 */
public function setCurrentLeaderEpoch(int $currentLeaderEpoch): self
{
    $this->currentLeaderEpoch = $currentLeaderEpoch;

    return $this;
}
/**
 * @return int
 */
public function getVoterId(): int
{
    return $this->voterId;
}

/**
 * @param int $voterId
 *
 * @return self
 */
public function setVoterId(int $voterId): self
{
    $this->voterId = $voterId;

    return $this;
}
/**
 * @return string
 */
public function getVoterDirectoryId(): string
{
    return $this->voterDirectoryId;
}

/**
 * @param string $voterDirectoryId
 *
 * @return self
 */
public function setVoterDirectoryId(string $voterDirectoryId): self
{
    $this->voterDirectoryId = $voterDirectoryId;

    return $this;
}
/**
 * @return Listener[]
 */
public function getListeners(): array
{
    return $this->listeners;
}

/**
 * @param Listener[] $listeners
 *
 * @return self
 */
public function setListeners(array $listeners): self
{
    $this->listeners = $listeners;

    return $this;
}
/**
 * @return KRaftVersionFeature
 */
public function getKRaftVersionFeature(): KRaftVersionFeature
{
    return $this->kRaftVersionFeature;
}

/**
 * @param KRaftVersionFeature $kRaftVersionFeature
 *
 * @return self
 */
public function setKRaftVersionFeature(KRaftVersionFeature $kRaftVersionFeature): self
{
    $this->kRaftVersionFeature = $kRaftVersionFeature;

    return $this;
}

}