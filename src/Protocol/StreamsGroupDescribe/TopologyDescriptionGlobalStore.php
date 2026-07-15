<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopologyDescriptionGlobalStore extends AbstractStruct
{
    /**
 * The source node providing data to the global store.
 *
 * @var TopologyDescriptionNode
 */
protected $source = null;

/**
 * The processor node that populates the global store.
 *
 * @var TopologyDescriptionNode
 */
protected $processor = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('source', TopologyDescriptionNode::class, false, [1], [0,1], [], [], null),
new ProtocolField('processor', TopologyDescriptionNode::class, false, [1], [0,1], [], [], null),

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
 * @return TopologyDescriptionNode
 */
public function getSource(): TopologyDescriptionNode
{
    return $this->source;
}

/**
 * @param TopologyDescriptionNode $source
 *
 * @return self
 */
public function setSource(TopologyDescriptionNode $source): self
{
    $this->source = $source;

    return $this;
}
/**
 * @return TopologyDescriptionNode
 */
public function getProcessor(): TopologyDescriptionNode
{
    return $this->processor;
}

/**
 * @param TopologyDescriptionNode $processor
 *
 * @return self
 */
public function setProcessor(TopologyDescriptionNode $processor): self
{
    $this->processor = $processor;

    return $this;
}

}