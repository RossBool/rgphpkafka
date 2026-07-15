<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeQuorum;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Node extends AbstractStruct
{
    /**
 * The ID of the associated node.
 *
 * @var int
 */
protected $nodeId = 0;

/**
 * The listeners of this controller.
 *
 * @var Listener[]
 */
protected $listeners = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('nodeId', 'int32', false, [2], [0,1,2], [], [], null),
new ProtocolField('listeners', Listener::class, true, [2], [0,1,2], [], [], null),

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
 * @return Listener[]
 */
public function getListeners(): array
{
    return $this->listeners;
}

/**
 * @param Listener[] $listeners
 *
 * @return self
 */
public function setListeners(array $listeners): self
{
    $this->listeners = $listeners;

    return $this;
}

}