<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\BrokerRegistration;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class BrokerRegistrationRequest extends AbstractRequest
{
    /**
 * The broker ID.
 *
 * @var int
 */
protected $brokerId = 0;

/**
 * The cluster id of the broker process.
 *
 * @var string
 */
protected $clusterId = '';

/**
 * The incarnation id of the broker process.
 *
 * @var string
 */
protected $incarnationId = '';

/**
 * The listeners of this broker.
 *
 * @var Listener[]
 */
protected $listeners = [];

/**
 * The features on this broker. Note: in v0-v3, features with MinSupportedVersion = 0 are omitted.
 *
 * @var Feature[]
 */
protected $features = [];

/**
 * The rack which this broker is in.
 *
 * @var string|null
 */
protected $rack = null;

/**
 * If the required configurations for ZK migration are present, this value is set to true.
 *
 * @var bool
 */
protected $isMigratingZkBroker = false;

/**
 * Log directories configured in this broker which are available.
 *
 * @var string[]
 */
protected $logDirs = [];

/**
 * The epoch before a clean shutdown.
 *
 * @var int
 */
protected $previousBrokerEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [0,1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('clusterId', 'string', false, [0,1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('incarnationId', 'uuid', false, [0,1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('listeners', Listener::class, true, [0,1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('features', Feature::class, true, [0,1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('rack', 'string', false, [0,1,2,3,4], [0,1,2,3,4], [0,1,2,3,4], [], null),
new ProtocolField('isMigratingZkBroker', 'bool', false, [1,2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('logDirs', 'uuid', true, [2,3,4], [0,1,2,3,4], [], [], null),
new ProtocolField('previousBrokerEpoch', 'int64', false, [3,4], [0,1,2,3,4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 62;
}

public function getMaxSupportedVersion(): int
{
    return 4;
}

public function getFlexibleVersions(): array
{
    return [0,1,2,3,4];
}


    /**
 * @return int
 */
public function getBrokerId(): int
{
    return $this->brokerId;
}

/**
 * @param int $brokerId
 *
 * @return self
 */
public function setBrokerId(int $brokerId): self
{
    $this->brokerId = $brokerId;

    return $this;
}
/**
 * @return string
 */
public function getClusterId(): string
{
    return $this->clusterId;
}

/**
 * @param string $clusterId
 *
 * @return self
 */
public function setClusterId(string $clusterId): self
{
    $this->clusterId = $clusterId;

    return $this;
}
/**
 * @return string
 */
public function getIncarnationId(): string
{
    return $this->incarnationId;
}

/**
 * @param string $incarnationId
 *
 * @return self
 */
public function setIncarnationId(string $incarnationId): self
{
    $this->incarnationId = $incarnationId;

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
 * @return Feature[]
 */
public function getFeatures(): array
{
    return $this->features;
}

/**
 * @param Feature[] $features
 *
 * @return self
 */
public function setFeatures(array $features): self
{
    $this->features = $features;

    return $this;
}
/**
 * @return string|null
 */
public function getRack(): ?string
{
    return $this->rack;
}

/**
 * @param string|null $rack
 *
 * @return self
 */
public function setRack(?string $rack): self
{
    $this->rack = $rack;

    return $this;
}
/**
 * @return bool
 */
public function getIsMigratingZkBroker(): bool
{
    return $this->isMigratingZkBroker;
}

/**
 * @param bool $isMigratingZkBroker
 *
 * @return self
 */
public function setIsMigratingZkBroker(bool $isMigratingZkBroker): self
{
    $this->isMigratingZkBroker = $isMigratingZkBroker;

    return $this;
}
/**
 * @return string[]
 */
public function getLogDirs(): array
{
    return $this->logDirs;
}

/**
 * @param string[] $logDirs
 *
 * @return self
 */
public function setLogDirs(array $logDirs): self
{
    $this->logDirs = $logDirs;

    return $this;
}
/**
 * @return int
 */
public function getPreviousBrokerEpoch(): int
{
    return $this->previousBrokerEpoch;
}

/**
 * @param int $previousBrokerEpoch
 *
 * @return self
 */
public function setPreviousBrokerEpoch(int $previousBrokerEpoch): self
{
    $this->previousBrokerEpoch = $previousBrokerEpoch;

    return $this;
}

}