<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareAcknowledge;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class NodeEndpoint extends AbstractStruct
{
    /**
 * The ID of the associated node.
 *
 * @var int
 */
protected $nodeId = 0;

/**
 * The node's hostname.
 *
 * @var string
 */
protected $host = '';

/**
 * The node's port.
 *
 * @var int
 */
protected $port = 0;

/**
 * The rack of the node, or null if it has not been assigned to a rack.
 *
 * @var string|null
 */
protected $rack = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('nodeId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('host', 'string', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('port', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('rack', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),

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