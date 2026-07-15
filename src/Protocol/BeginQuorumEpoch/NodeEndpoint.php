<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\BeginQuorumEpoch;

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



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('nodeId', 'int32', false, [1], [1], [], [], null),
new ProtocolField('host', 'string', false, [1], [1], [], [], null),
new ProtocolField('port', 'uint16', false, [1], [1], [], [], null),

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

}