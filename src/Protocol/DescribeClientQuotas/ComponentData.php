<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeClientQuotas;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ComponentData extends AbstractStruct
{
    /**
 * The entity type that the filter component applies to.
 *
 * @var string
 */
protected $entityType = '';

/**
 * How to match the entity {0 = exact name, 1 = default name, 2 = any specified name}.
 *
 * @var int
 */
protected $matchType = 0;

/**
 * The string to match against, or null if unused for the match type.
 *
 * @var string|null
 */
protected $match = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('entityType', 'string', false, [0,1], [1], [], [], null),
new ProtocolField('matchType', 'int8', false, [0,1], [1], [], [], null),
new ProtocolField('match', 'string', false, [0,1], [1], [0,1], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [1];
}


    /**
 * @return string
 */
public function getEntityType(): string
{
    return $this->entityType;
}

/**
 * @param string $entityType
 *
 * @return self
 */
public function setEntityType(string $entityType): self
{
    $this->entityType = $entityType;

    return $this;
}
/**
 * @return int
 */
public function getMatchType(): int
{
    return $this->matchType;
}

/**
 * @param int $matchType
 *
 * @return self
 */
public function setMatchType(int $matchType): self
{
    $this->matchType = $matchType;

    return $this;
}
/**
 * @return string|null
 */
public function getMatch(): ?string
{
    return $this->match;
}

/**
 * @param string|null $match
 *
 * @return self
 */
public function setMatch(?string $match): self
{
    $this->match = $match;

    return $this;
}

}