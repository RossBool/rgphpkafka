<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ControllerRegistration;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Feature extends AbstractStruct
{
    /**
 * The feature name.
 *
 * @var string
 */
protected $name = '';

/**
 * The minimum supported feature level.
 *
 * @var int
 */
protected $minSupportedVersion = 0;

/**
 * The maximum supported feature level.
 *
 * @var int
 */
protected $maxSupportedVersion = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0], [0], [], [], null),
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