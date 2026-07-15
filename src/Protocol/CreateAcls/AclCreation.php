<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateAcls;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AclCreation extends AbstractStruct
{
    /**
 * The type of the resource.
 *
 * @var int
 */
protected $resourceType = 0;

/**
 * The resource name for the ACL.
 *
 * @var string
 */
protected $resourceName = '';

/**
 * The pattern type for the ACL.
 *
 * @var int
 */
protected $resourcePatternType = 3;

/**
 * The principal for the ACL.
 *
 * @var string
 */
protected $principal = '';

/**
 * The host for the ACL.
 *
 * @var string
 */
protected $host = '';

/**
 * The operation type for the ACL (read, write, etc.).
 *
 * @var int
 */
protected $operation = 0;

/**
 * The permission type for the ACL (allow, deny, etc.).
 *
 * @var int
 */
protected $permissionType = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceType', 'int8', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('resourceName', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('resourcePatternType', 'int8', false, [1,2,3], [2,3], [], [], null),
new ProtocolField('principal', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('host', 'string', false, [0,1,2,3], [2,3], [], [], null),
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
public function getResourcePatternType(): int
{
    return $this->resourcePatternType;
}

/**
 * @param int $resourcePatternType
 *
 * @return self
 */
public function setResourcePatternType(int $resourcePatternType): self
{
    $this->resourcePatternType = $resourcePatternType;

    return $this;
}
/**
 * @return string
 */
public function getPrincipal(): string
{
    return $this->principal;
}

/**
 * @param string $principal
 *
 * @return self
 */
public function setPrincipal(string $principal): self
{
    $this->principal = $principal;

    return $this;
}
/**
 * @return string
 */
public function getHost(): string
{
    return $this->host;
}

/**
 * @param string $host
 *
 * @return self
 */
public function setHost(string $host): self
{
    $this->host = $host;

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