<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteAcls;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteAclsMatchingAcl extends AbstractStruct
{
    /**
 * The deletion error code, or 0 if the deletion succeeded.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The deletion error message, or null if the deletion succeeded.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The ACL resource type.
 *
 * @var int
 */
protected $resourceType = 0;

/**
 * The ACL resource name.
 *
 * @var string
 */
protected $resourceName = '';

/**
 * The ACL resource pattern type.
 *
 * @var int
 */
protected $patternType = 3;

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
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2,3], [2,3], [0,1,2,3], [], null),
new ProtocolField('resourceType', 'int8', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('resourceName', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('patternType', 'int8', false, [1,2,3], [2,3], [], [], null),
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
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
}
/**
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

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