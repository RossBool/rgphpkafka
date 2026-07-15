<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeConfigs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeConfigsResource extends AbstractStruct
{
    /**
 * The resource type.
 *
 * @var int
 */
protected $resourceType = 0;

/**
 * The resource name.
 *
 * @var string
 */
protected $resourceName = '';

/**
 * The configuration keys to list, or null to list all configuration keys.
 *
 * @var string[]|null
 */
protected $configurationKeys = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceType', 'int8', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('resourceName', 'string', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('configurationKeys', 'string', true, [0,1,2,3,4], [4], [0,1,2,3,4], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4];
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
 * @return string[]|null
 */
public function getConfigurationKeys(): ?array
{
    return $this->configurationKeys;
}

/**
 * @param string[]|null $configurationKeys
 *
 * @return self
 */
public function setConfigurationKeys(?array $configurationKeys): self
{
    $this->configurationKeys = $configurationKeys;

    return $this;
}

}