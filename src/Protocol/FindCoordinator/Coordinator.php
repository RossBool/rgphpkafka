<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FindCoordinator;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Coordinator extends AbstractStruct
{
    /**
 * The coordinator key.
 *
 * @var string
 */
protected $key = '';

/**
 * The node id.
 *
 * @var int
 */
protected $nodeId = 0;

/**
 * The host name.
 *
 * @var string
 */
protected $host = '';

/**
 * The port.
 *
 * @var int
 */
protected $port = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('key', 'string', false, [4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('nodeId', 'int32', false, [4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('host', 'string', false, [4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('port', 'int32', false, [4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('errorCode', 'int16', false, [4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('errorMessage', 'string', false, [4,5,6], [3,4,5,6], [4,5,6], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5,6];
}


    /**
 * @return string
 */
public function getKey(): string
{
    return $this->key;
}

/**
 * @param string $key
 *
 * @return self
 */
public function setKey(string $key): self
{
    $this->key = $key;

    return $this;
}
/**
 * @return int
 */
public function getNodeId(): int
{
    return $this->nodeId;
}

/**
 * @param int $nodeId
 *
 * @return self
 */
public function setNodeId(int $nodeId): self
{
    $this->nodeId = $nodeId;

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
public function getPort(): int
{
    return $this->port;
}

/**
 * @param int $port
 *
 * @return self
 */
public function setPort(int $port): self
{
    $this->port = $port;

    return $this;
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

}