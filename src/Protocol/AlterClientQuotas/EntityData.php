<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterClientQuotas;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class EntityData extends AbstractStruct
{
    /**
 * The entity type.
 *
 * @var string
 */
protected $entityType = '';

/**
 * The name of the entity, or null if the default.
 *
 * @var string|null
 */
protected $entityName = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('entityType', 'string', false, [0,1], [1], [], [], null),
new ProtocolField('entityName', 'string', false, [0,1], [1], [0,1], [], null),

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
 * @return string|null
 */
public function getEntityName(): ?string
{
    return $this->entityName;
}

/**
 * @param string|null $entityName
 *
 * @return self
 */
public function setEntityName(?string $entityName): self
{
    $this->entityName = $entityName;

    return $this;
}

}