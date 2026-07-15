<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupTopologyDescriptionUpdate;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopologyDescriptionNode extends AbstractStruct
{
    /**
 * The name of this node (e.g., KSTREAM-SOURCE-0000000000).
 *
 * @var string
 */
protected $name = '';

/**
 * The type of this node: 1=SOURCE, 2=PROCESSOR, 3=SINK.
 *
 * @var int
 */
protected $nodeType = 0;

/**
 * The source topics this node reads from. Defined only for source nodes, may be empty if source topics are dynamically determined.
 *
 * @var string[]
 */
protected $sourceTopics = [];

/**
 * The topic this node writes to. Defined only for sink nodes, may be null if sink topic is dynamically determined.
 *
 * @var string|null
 */
protected $sinkTopic = null;

/**
 * The state store names accessed by this node. Defined only for processor nodes.
 *
 * @var string[]
 */
protected $stores = [];

/**
 * The names of successor nodes in the processing graph. Predecessor relationships are reconstructed from this field.
 *
 * @var string[]
 */
protected $successors = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0], [0], [], [], null),
new ProtocolField('nodeType', 'int8', false, [0], [0], [], [], null),
new ProtocolField('sourceTopics', 'string', true, [0], [0], [], [], null),
new ProtocolField('sinkTopic', 'string', false, [0], [0], [0], [], null),
new ProtocolField('stores', 'string', true, [0], [0], [], [], null),
new ProtocolField('successors', 'string', true, [0], [0], [], [], null),

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
 * @return int
 */
public function getNodeType(): int
{
    return $this->nodeType;
}

/**
 * @param int $nodeType
 *
 * @return self
 */
public function setNodeType(int $nodeType): self
{
    $this->nodeType = $nodeType;

    return $this;
}
/**
 * @return string[]
 */
public function getSourceTopics(): array
{
    return $this->sourceTopics;
}

/**
 * @param string[] $sourceTopics
 *
 * @return self
 */
public function setSourceTopics(array $sourceTopics): self
{
    $this->sourceTopics = $sourceTopics;

    return $this;
}
/**
 * @return string|null
 */
public function getSinkTopic(): ?string
{
    return $this->sinkTopic;
}

/**
 * @param string|null $sinkTopic
 *
 * @return self
 */
public function setSinkTopic(?string $sinkTopic): self
{
    $this->sinkTopic = $sinkTopic;

    return $this;
}
/**
 * @return string[]
 */
public function getStores(): array
{
    return $this->stores;
}

/**
 * @param string[] $stores
 *
 * @return self
 */
public function setStores(array $stores): self
{
    $this->stores = $stores;

    return $this;
}
/**
 * @return string[]
 */
public function getSuccessors(): array
{
    return $this->successors;
}

/**
 * @param string[] $successors
 *
 * @return self
 */
public function setSuccessors(array $successors): self
{
    $this->successors = $successors;

    return $this;
}

}