<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateFeatures;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class FeatureUpdateKey extends AbstractStruct
{
    /**
 * The name of the finalized feature to be updated.
 *
 * @var string
 */
protected $feature = '';

/**
 * The new maximum version level for the finalized feature. A value >= 1 is valid. A value < 1, is special, and can be used to request the deletion of the finalized feature.
 *
 * @var int
 */
protected $maxVersionLevel = 0;

/**
 * DEPRECATED in version 1 (see DowngradeType). When set to true, the finalized feature version level is allowed to be downgraded/deleted. The downgrade request will fail if the new maximum version level is a value that's not lower than the existing maximum finalized version level.
 *
 * @var bool
 */
protected $allowDowngrade = false;

/**
 * Determine which type of upgrade will be performed: 1 will perform an upgrade only (default), 2 is safe downgrades only (lossless), 3 is unsafe downgrades (lossy).
 *
 * @var int
 */
protected $upgradeType = 1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('feature', 'string', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('maxVersionLevel', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('allowDowngrade', 'bool', false, [0], [0,1,2], [], [], null),
new ProtocolField('upgradeType', 'int8', false, [1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return string
 */
public function getFeature(): string
{
    return $this->feature;
}

/**
 * @param string $feature
 *
 * @return self
 */
public function setFeature(string $feature): self
{
    $this->feature = $feature;

    return $this;
}
/**
 * @return int
 */
public function getMaxVersionLevel(): int
{
    return $this->maxVersionLevel;
}

/**
 * @param int $maxVersionLevel
 *
 * @return self
 */
public function setMaxVersionLevel(int $maxVersionLevel): self
{
    $this->maxVersionLevel = $maxVersionLevel;

    return $this;
}
/**
 * @return bool
 */
public function getAllowDowngrade(): bool
{
    return $this->allowDowngrade;
}

/**
 * @param bool $allowDowngrade
 *
 * @return self
 */
public function setAllowDowngrade(bool $allowDowngrade): self
{
    $this->allowDowngrade = $allowDowngrade;

    return $this;
}
/**
 * @return int
 */
public function getUpgradeType(): int
{
    return $this->upgradeType;
}

/**
 * @param int $upgradeType
 *
 * @return self
 */
public function setUpgradeType(int $upgradeType): self
{
    $this->upgradeType = $upgradeType;

    return $this;
}

}