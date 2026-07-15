<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeAcls;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AclDescription extends AbstractStruct
{
    /**
 * The ACL principal.
 *
 * @var string
 */
protected $principal = '';

/**
 * The ACL host.
 *
 * @var string
 */
protected $host = '';

/**
 * The ACL operation.
 *
 * @var int
 */
protected $operation = 0;

/**
 * The ACL permission type.
 *
 * @var int
 */
protected $permissionType = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
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