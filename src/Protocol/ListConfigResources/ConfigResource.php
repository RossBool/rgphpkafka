<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListConfigResources;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ConfigResource extends AbstractStruct
{
    /**
 * The resource name.
 *
 * @var string
 */
protected $resourceName = '';

/**
 * The resource type.
 *
 * @var int
 */
protected $resourceType = 16;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceName', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('resourceType', 'int8', false, [1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return string
 */
public function getResourceName(): string
{
    return $this->resourceName;
}

/**
 * @param string $resourceName
 *
 * @return self
 */
public function setResourceName(string $resourceName): self
{
    $this->resourceName = $resourceName;

    return $this;
}
/**
 * @return int
 */
public function getResourceType(): int
{
    return $this->resourceType;
}

/**
 * @param int $resourceType
 *
 * @return self
 */
public function setResourceType(int $resourceType): self
{
    $this->resourceType = $resourceType;

    return $this;
}

}