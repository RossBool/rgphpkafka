<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeAcls;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeAclsResource extends AbstractStruct
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
 * The resource pattern type.
 *
 * @var int
 */
protected $patternType = 3;

/**
 * The ACLs.
 *
 * @var AclDescription[]
 */
protected $acls = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceType', 'int8', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('resourceName', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('patternType', 'int8', false, [1,2,3], [2,3], [], [], null),
new ProtocolField('acls', AclDescription::class, true, [0,1,2,3], [2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3];
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
 * @return int
 */
public function getPatternType(): int
{
    return $this->patternType;
}

/**
 * @param int $patternType
 *
 * @return self
 */
public function setPatternType(int $patternType): self
{
    $this->patternType = $patternType;

    return $this;
}
/**
 * @return AclDescription[]
 */
public function getAcls(): array
{
    return $this->acls;
}

/**
 * @param AclDescription[] $acls
 *
 * @return self
 */
public function setAcls(array $acls): self
{
    $this->acls = $acls;

    return $this;
}

}