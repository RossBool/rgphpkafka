<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Metadata;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MetadataResponseBroker extends AbstractStruct
{
    /**
 * The broker ID.
 *
 * @var int
 */
protected $nodeId = 0;

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



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('nodeId', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('host', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('port', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('rack', 'string', false, [1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [1,2,3,4,5,6,7,8,9,10,11,12,13], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
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

}