<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Topology extends AbstractStruct
{
    /**
 * The epoch of the currently initialized topology for this group.
 *
 * @var int
 */
protected $epoch = 0;

/**
 * The subtopologies of the streams application. This contains the configured subtopologies, where the number of partitions are set and any regular expressions are resolved to actual topics. Null if the group is uninitialized, source topics are missing or incorrectly partitioned.
 *
 * @var Subtopology[]|null
 */
protected $subtopologies = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('epoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('subtopologies', Subtopology::class, true, [0,1], [0,1], [0,1], [], null),

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
 * @return int
 */
public function getEpoch(): int
{
    return $this->epoch;
}

/**
 * @param int $epoch
 *
 * @return self
 */
public function setEpoch(int $epoch): self
{
    $this->epoch = $epoch;

    return $this;
}
/**
 * @return Subtopology[]|null
 */
public function getSubtopologies(): ?array
{
    return $this->subtopologies;
}

/**
 * @param Subtopology[]|null $subtopologies
 *
 * @return self
 */
public function setSubtopologies(?array $subtopologies): self
{
    $this->subtopologies = $subtopologies;

    return $this;
}

}