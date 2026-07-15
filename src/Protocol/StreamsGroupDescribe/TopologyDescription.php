<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopologyDescription extends AbstractStruct
{
    /**
 * The subtopologies that make up this topology.
 *
 * @var TopologyDescriptionSubtopology[]
 */
protected $subtopologies = [];

/**
 * Global state stores used by this topology.
 *
 * @var TopologyDescriptionGlobalStore[]
 */
protected $globalStores = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('subtopologies', TopologyDescriptionSubtopology::class, true, [1], [0,1], [], [], null),
new ProtocolField('globalStores', TopologyDescriptionGlobalStore::class, true, [1], [0,1], [], [], null),

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
 * @return TopologyDescriptionSubtopology[]
 */
public function getSubtopologies(): array
{
    return $this->subtopologies;
}

/**
 * @param TopologyDescriptionSubtopology[] $subtopologies
 *
 * @return self
 */
public function setSubtopologies(array $subtopologies): self
{
    $this->subtopologies = $subtopologies;

    return $this;
}
/**
 * @return TopologyDescriptionGlobalStore[]
 */
public function getGlobalStores(): array
{
    return $this->globalStores;
}

/**
 * @param TopologyDescriptionGlobalStore[] $globalStores
 *
 * @return self
 */
public function setGlobalStores(array $globalStores): self
{
    $this->globalStores = $globalStores;

    return $this;
}

}