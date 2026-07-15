<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteAcls;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteAclsFilter extends AbstractStruct
{
    /**
 * The resource type.
 *
 * @var int
 */
protected $resourceTypeFilter = 0;

/**
 * The resource name, or null to match any resource name.
 *
 * @var string|null
 */
protected $resourceNameFilter = null;

/**
 * The pattern type.
 *
 * @var int
 */
protected $patternTypeFilter = 3;

/**
 * The principal filter, or null to accept all principals.
 *
 * @var string|null
 */
protected $principalFilter = null;

/**
 * The host filter, or null to accept all hosts.
 *
 * @var string|null
 */
protected $hostFilter = null;

/**
 * The ACL operation.
 *
 * @var int
 */
protected $operation = 0;

/**
 * The permission type.
 *
 * @var int
 */
protected $permissionType = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceTypeFilter', 'int8', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('resourceNameFilter', 'string', false, [0,1,2,3], [2,3], [0,1,2,3], [], null),
new ProtocolField('patternTypeFilter', 'int8', false, [1,2,3], [2,3], [], [], null),
new ProtocolField('principalFilter', 'string', false, [0,1,2,3], [2,3], [0,1,2,3], [], null),
new ProtocolField('hostFilter', 'string', false, [0,1,2,3], [2,3], [0,1,2,3], [], null),
new ProtocolField('operation', 'int8', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('permissionType', 'int8', false, [0,1,2,3], [2,3], [], [], null),

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
public function getResourceTypeFilter(): int
{
    return $this->resourceTypeFilter;
}

/**
 * @param int $resourceTypeFilter
 *
 * @return self
 */
public function setResourceTypeFilter(int $resourceTypeFilter): self
{
    $this->resourceTypeFilter = $resourceTypeFilter;

    return $this;
}
/**
 * @return string|null
 */
public function getResourceNameFilter(): ?string
{
    return $this->resourceNameFilter;
}

/**
 * @param string|null $resourceNameFilter
 *
 * @return self
 */
public function setResourceNameFilter(?string $resourceNameFilter): self
{
    $this->resourceNameFilter = $resourceNameFilter;

    return $this;
}
/**
 * @return int
 */
public function getPatternTypeFilter(): int
{
    return $this->patternTypeFilter;
}

/**
 * @param int $patternTypeFilter
 *
 * @return self
 */
public function setPatternTypeFilter(int $patternTypeFilter): self
{
    $this->patternTypeFilter = $patternTypeFilter;

    return $this;
}
/**
 * @return string|null
 */
public function getPrincipalFilter(): ?string
{
    return $this->principalFilter;
}

/**
 * @param string|null $principalFilter
 *
 * @return self
 */
public function setPrincipalFilter(?string $principalFilter): self
{
    $this->principalFilter = $principalFilter;

    return $this;
}
/**
 * @return string|null
 */
public function getHostFilter(): ?string
{
    return $this->hostFilter;
}

/**
 * @param string|null $hostFilter
 *
 * @return self
 */
public function setHostFilter(?string $hostFilter): self
{
    $this->hostFilter = $hostFilter;

    return $this;
}
/**
 * @return int
 */
public function getOperation(): int
{
    return $this->operation;
}

/**
 * @param int $operation
 *
 * @return self
 */
public function setOperation(int $operation): self
{
    $this->operation = $operation;

    return $this;
}
/**
 * @return int
 */
public function getPermissionType(): int
{
    return $this->permissionType;
}

/**
 * @param int $permissionType
 *
 * @return self
 */
public function setPermissionType(int $permissionType): self
{
    $this->permissionType = $permissionType;

    return $this;
}

}