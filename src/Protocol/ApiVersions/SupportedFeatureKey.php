<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ApiVersions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class SupportedFeatureKey extends AbstractStruct
{
    /**
 * The name of the feature.
 *
 * @var string
 */
protected $name = '';

/**
 * The minimum supported version for the feature.
 *
 * @var int
 */
protected $minVersion = 0;

/**
 * The maximum supported version for the feature.
 *
 * @var int
 */
protected $maxVersion = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('minVersion', 'int16', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('maxVersion', 'int16', false, [3,4,5], [3,4,5], [], [], null),

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
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

    return $this;
}
/**
 * @return int
 */
public function getMinVersion(): int
{
    return $this->minVersion;
}

/**
 * @param int $minVersion
 *
 * @return self
 */
public function setMinVersion(int $minVersion): self
{
    $this->minVersion = $minVersion;

    return $this;
}
/**
 * @return int
 */
public function getMaxVersion(): int
{
    return $this->maxVersion;
}

/**
 * @param int $maxVersion
 *
 * @return self
 */
public function setMaxVersion(int $maxVersion): self
{
    $this->maxVersion = $maxVersion;

    return $this;
}

}