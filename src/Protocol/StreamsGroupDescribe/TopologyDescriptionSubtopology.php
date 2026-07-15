<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopologyDescriptionSubtopology extends AbstractStruct
{
    /**
 * The subtopology identifier, unique within the topology.
 *
 * @var string
 */
protected $subtopologyId = '';

/**
 * The processing nodes in this subtopology.
 *
 * @var TopologyDescriptionNode[]
 */
protected $nodes = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('subtopologyId', 'string', false, [1], [0,1], [], [], null),
new ProtocolField('nodes', TopologyDescriptionNode::class, true, [1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return string
 */
public function getSubtopologyId(): string
{
    return $this->subtopologyId;
}

/**
 * @param string $subtopologyId
 *
 * @return self
 */
public function setSubtopologyId(string $subtopologyId): self
{
    $this->subtopologyId = $subtopologyId;

    return $this;
}
/**
 * @return TopologyDescriptionNode[]
 */
public function getNodes(): array
{
    return $this->nodes;
}

/**
 * @param TopologyDescriptionNode[] $nodes
 *
 * @return self
 */
public function setNodes(array $nodes): self
{
    $this->nodes = $nodes;

    return $this;
}

}