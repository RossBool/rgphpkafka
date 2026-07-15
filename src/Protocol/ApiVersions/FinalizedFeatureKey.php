<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ApiVersions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class FinalizedFeatureKey extends AbstractStruct
{
    /**
 * The name of the feature.
 *
 * @var string
 */
protected $name = '';

/**
 * The cluster-wide finalized max version level for the feature.
 *
 * @var int
 */
protected $maxVersionLevel = 0;

/**
 * The cluster-wide finalized min version level for the feature.
 *
 * @var int
 */
protected $minVersionLevel = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('maxVersionLevel', 'int16', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('minVersionLevel', 'int16', false, [3,4,5], [3,4,5], [], [], null),

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
 * @return int
 */
public function getMinVersionLevel(): int
{
    return $this->minVersionLevel;
}

/**
 * @param int $minVersionLevel
 *
 * @return self
 */
public function setMinVersionLevel(int $minVersionLevel): self
{
    $this->minVersionLevel = $minVersionLevel;

    return $this;
}

}