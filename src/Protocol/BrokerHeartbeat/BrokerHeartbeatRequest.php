<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\BrokerHeartbeat;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class BrokerHeartbeatRequest extends AbstractRequest
{
    /**
 * The broker ID.
 *
 * @var int
 */
protected $brokerId = 0;

/**
 * The broker epoch.
 *
 * @var int
 */
protected $brokerEpoch = -1;

/**
 * The highest metadata offset which the broker has reached.
 *
 * @var int
 */
protected $currentMetadataOffset = 0;

/**
 * True if the broker wants to be fenced, false otherwise.
 *
 * @var bool
 */
protected $wantFence = false;

/**
 * True if the broker wants to be shut down, false otherwise.
 *
 * @var bool
 */
protected $wantShutDown = false;

/**
 * Log directories that failed and went offline.
 *
 * @var string[]
 */
protected $offlineLogDirs = [];

/**
 * List of log directories that are cordoned. This is null before the broker reaches the RECOVERY state.
 *
 * @var string[]|null
 */
protected $cordonedLogDirs = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('brokerEpoch', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('currentMetadataOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('wantFence', 'bool', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('wantShutDown', 'bool', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('offlineLogDirs', 'uuid', true, [1,2], [0,1,2], [], [1,2], 0),
new ProtocolField('cordonedLogDirs', 'uuid', true, [2], [0,1,2], [2], [2], 1),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 63;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
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
 * @return int
 */
public function getBrokerEpoch(): int
{
    return $this->brokerEpoch;
}

/**
 * @param int $brokerEpoch
 *
 * @return self
 */
public function setBrokerEpoch(int $brokerEpoch): self
{
    $this->brokerEpoch = $brokerEpoch;

    return $this;
}
/**
 * @return int
 */
public function getCurrentMetadataOffset(): int
{
    return $this->currentMetadataOffset;
}

/**
 * @param int $currentMetadataOffset
 *
 * @return self
 */
public function setCurrentMetadataOffset(int $currentMetadataOffset): self
{
    $this->currentMetadataOffset = $currentMetadataOffset;

    return $this;
}
/**
 * @return bool
 */
public function getWantFence(): bool
{
    return $this->wantFence;
}

/**
 * @param bool $wantFence
 *
 * @return self
 */
public function setWantFence(bool $wantFence): self
{
    $this->wantFence = $wantFence;

    return $this;
}
/**
 * @return bool
 */
public function getWantShutDown(): bool
{
    return $this->wantShutDown;
}

/**
 * @param bool $wantShutDown
 *
 * @return self
 */
public function setWantShutDown(bool $wantShutDown): self
{
    $this->wantShutDown = $wantShutDown;

    return $this;
}
/**
 * @return string[]
 */
public function getOfflineLogDirs(): array
{
    return $this->offlineLogDirs;
}

/**
 * @param string[] $offlineLogDirs
 *
 * @return self
 */
public function setOfflineLogDirs(array $offlineLogDirs): self
{
    $this->offlineLogDirs = $offlineLogDirs;

    return $this;
}
/**
 * @return string[]|null
 */
public function getCordonedLogDirs(): ?array
{
    return $this->cordonedLogDirs;
}

/**
 * @param string[]|null $cordonedLogDirs
 *
 * @return self
 */
public function setCordonedLogDirs(?array $cordonedLogDirs): self
{
    $this->cordonedLogDirs = $cordonedLogDirs;

    return $this;
}

}