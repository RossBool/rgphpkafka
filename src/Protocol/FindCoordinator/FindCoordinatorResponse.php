<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FindCoordinator;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class FindCoordinatorResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

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
 * Each coordinator result in the response.
 *
 * @var Coordinator[]
 */
protected $coordinators = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3], [3,4,5,6], [], [], null),
new ProtocolField('errorMessage', 'string', false, [1,2,3], [3,4,5,6], [1,2,3], [], null),
new ProtocolField('nodeId', 'int32', false, [0,1,2,3], [3,4,5,6], [], [], null),
new ProtocolField('host', 'string', false, [0,1,2,3], [3,4,5,6], [], [], null),
new ProtocolField('port', 'int32', false, [0,1,2,3], [3,4,5,6], [], [], null),
new ProtocolField('coordinators', Coordinator::class, true, [4,5,6], [3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 10;
}

public function getFlexibleVersions(): array
{
    return [3,4,5,6];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

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
 * @return Coordinator[]
 */
public function getCoordinators(): array
{
    return $this->coordinators;
}

/**
 * @param Coordinator[] $coordinators
 *
 * @return self
 */
public function setCoordinators(array $coordinators): self
{
    $this->coordinators = $coordinators;

    return $this;
}

}