<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\IncrementalAlterConfigs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterConfigsResourceResponse extends AbstractStruct
{
    /**
 * The resource error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The resource error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

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



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1], [1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [1], [0,1], [], null),
new ProtocolField('resourceType', 'int8', false, [0,1], [1], [], [], null),
new ProtocolField('resourceName', 'string', false, [0,1], [1], [], [], null),

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

}