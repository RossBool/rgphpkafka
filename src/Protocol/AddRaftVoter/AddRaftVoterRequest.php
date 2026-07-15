<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddRaftVoter;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AddRaftVoterRequest extends AbstractRequest
{
    /**
 * The cluster id.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The maximum time to wait for the request to complete before returning.
 *
 * @var int
 */
protected $timeoutMs = 0;

/**
 * The replica id of the voter getting added to the topic partition.
 *
 * @var int
 */
protected $voterId = 0;

/**
 * The directory id of the voter getting added to the topic partition.
 *
 * @var string
 */
protected $voterDirectoryId = '';

/**
 * The endpoints that can be used to communicate with the voter.
 *
 * @var Listener[]
 */
protected $listeners = [];

/**
 * When true, return a response after the new voter set is committed. Otherwise, return after the leader writes the changes locally.
 *
 * @var bool
 */
protected $ackWhenCommitted = true;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('timeoutMs', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('voterId', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('voterDirectoryId', 'uuid', false, [0,1], [0,1], [], [], null),
new ProtocolField('listeners', Listener::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('ackWhenCommitted', 'bool', false, [1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 80;
}

public function getMaxSupportedVersion(): int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [0,1];
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
public function getTimeoutMs(): int
{
    return $this->timeoutMs;
}

/**
 * @param int $timeoutMs
 *
 * @return self
 */
public function setTimeoutMs(int $timeoutMs): self
{
    $this->timeoutMs = $timeoutMs;

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
 * @return bool
 */
public function getAckWhenCommitted(): bool
{
    return $this->ackWhenCommitted;
}

/**
 * @param bool $ackWhenCommitted
 *
 * @return self
 */
public function setAckWhenCommitted(bool $ackWhenCommitted): self
{
    $this->ackWhenCommitted = $ackWhenCommitted;

    return $this;
}

}