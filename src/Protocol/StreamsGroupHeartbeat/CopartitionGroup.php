<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CopartitionGroup extends AbstractStruct
{
    /**
 * The topics the topology reads from. Index into the array on the subtopology level.
 *
 * @var int[]
 */
protected $sourceTopics = [];

/**
 * Regular expressions identifying topics the subtopology reads from. Index into the array on the subtopology level.
 *
 * @var int[]
 */
protected $sourceTopicRegex = [];

/**
 * The set of source topics that are internally created repartition topics. Index into the array on the subtopology level.
 *
 * @var int[]
 */
protected $repartitionSourceTopics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('sourceTopics', 'int16', true, [0,1], [0,1], [], [], null),
new ProtocolField('sourceTopicRegex', 'int16', true, [0,1], [0,1], [], [], null),
new ProtocolField('repartitionSourceTopics', 'int16', true, [0,1], [0,1], [], [], null),

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
 * @return int[]
 */
public function getSourceTopics(): array
{
    return $this->sourceTopics;
}

/**
 * @param int[] $sourceTopics
 *
 * @return self
 */
public function setSourceTopics(array $sourceTopics): self
{
    $this->sourceTopics = $sourceTopics;

    return $this;
}
/**
 * @return int[]
 */
public function getSourceTopicRegex(): array
{
    return $this->sourceTopicRegex;
}

/**
 * @param int[] $sourceTopicRegex
 *
 * @return self
 */
public function setSourceTopicRegex(array $sourceTopicRegex): self
{
    $this->sourceTopicRegex = $sourceTopicRegex;

    return $this;
}
/**
 * @return int[]
 */
public function getRepartitionSourceTopics(): array
{
    return $this->repartitionSourceTopics;
}

/**
 * @param int[] $repartitionSourceTopics
 *
 * @return self
 */
public function setRepartitionSourceTopics(array $repartitionSourceTopics): self
{
    $this->repartitionSourceTopics = $repartitionSourceTopics;

    return $this;
}

}