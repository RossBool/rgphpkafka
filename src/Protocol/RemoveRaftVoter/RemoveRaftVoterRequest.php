<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\RemoveRaftVoter;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class RemoveRaftVoterRequest extends AbstractRequest
{
    /**
 * The cluster id of the request.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The replica id of the voter getting removed from the topic partition.
 *
 * @var int
 */
protected $voterId = 0;

/**
 * The directory id of the voter getting removed from the topic partition.
 *
 * @var string
 */
protected $voterDirectoryId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clusterId', 'string', false, [0], [0], [0], [], null),
new ProtocolField('voterId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('voterDirectoryId', 'uuid', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 81;
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

}