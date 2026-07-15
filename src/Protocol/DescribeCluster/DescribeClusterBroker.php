<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeCluster;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeClusterBroker extends AbstractStruct
{
    /**
 * The broker ID.
 *
 * @var int
 */
protected $brokerId = 0;

/**
 * The broker hostname.
 *
 * @var string
 */
protected $host = '';

/**
 * The broker port.
 *
 * @var int
 */
protected $port = 0;

/**
 * The rack of the broker, or null if it has not been assigned to a rack.
 *
 * @var string|null
 */
protected $rack = null;

/**
 * Whether the broker is fenced
 *
 * @var bool
 */
protected $isFenced = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('brokerId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('host', 'string', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('port', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('rack', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('isFenced', 'bool', false, [2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return int
 */
public function getBrokerId(): int
{
    return $this->brokerId;
}

/**
 * @param int $brokerId
 *
 * @return self
 */
public function setBrokerId(int $brokerId): self
{
    $this->brokerId = $brokerId;

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
 * @return string|null
 */
public function getRack(): ?string
{
    return $this->rack;
}

/**
 * @param string|null $rack
 *
 * @return self
 */
public function setRack(?string $rack): self
{
    $this->rack = $rack;

    return $this;
}
/**
 * @return bool
 */
public function getIsFenced(): bool
{
    return $this->isFenced;
}

/**
 * @param bool $isFenced
 *
 * @return self
 */
public function setIsFenced(bool $isFenced): self
{
    $this->isFenced = $isFenced;

    return $this;
}

}