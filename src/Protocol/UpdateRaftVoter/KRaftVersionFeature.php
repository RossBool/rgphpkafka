<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateRaftVoter;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class KRaftVersionFeature extends AbstractStruct
{
    /**
 * The minimum supported KRaft protocol version.
 *
 * @var int
 */
protected $minSupportedVersion = 0;

/**
 * The maximum supported KRaft protocol version.
 *
 * @var int
 */
protected $maxSupportedVersion = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('minSupportedVersion', 'int16', false, [0], [0], [], [], null),
new ProtocolField('maxSupportedVersion', 'int16', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return int
 */
public function getMinSupportedVersion(): int
{
    return $this->minSupportedVersion;
}

/**
 * @param int $minSupportedVersion
 *
 * @return self
 */
public function setMinSupportedVersion(int $minSupportedVersion): self
{
    $this->minSupportedVersion = $minSupportedVersion;

    return $this;
}
/**
 * @return int
 */
public function getMaxSupportedVersion(): int
{
    return $this->maxSupportedVersion;
}

/**
 * @param int $maxSupportedVersion
 *
 * @return self
 */
public function setMaxSupportedVersion(int $maxSupportedVersion): self
{
    $this->maxSupportedVersion = $maxSupportedVersion;

    return $this;
}

}