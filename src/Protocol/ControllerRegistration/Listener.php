<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ControllerRegistration;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Listener extends AbstractStruct
{
    /**
 * The name of the endpoint.
 *
 * @var string
 */
protected $name = '';

/**
 * The hostname.
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
 * The security protocol.
 *
 * @var int
 */
protected $securityProtocol = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0], [0], [], [], null),
new ProtocolField('host', 'string', false, [0], [0], [], [], null),
new ProtocolField('port', 'uint16', false, [0], [0], [], [], null),
new ProtocolField('securityProtocol', 'int16', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string
 */
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

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
public function getSecurityProtocol(): int
{
    return $this->securityProtocol;
}

/**
 * @param int $securityProtocol
 *
 * @return self
 */
public function setSecurityProtocol(int $securityProtocol): self
{
    $this->securityProtocol = $securityProtocol;

    return $this;
}

}