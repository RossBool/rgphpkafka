<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Subtopology extends AbstractStruct
{
    /**
 * String to uniquely identify the subtopology.
 *
 * @var string
 */
protected $subtopologyId = '';

/**
 * The topics the subtopology reads from.
 *
 * @var string[]
 */
protected $sourceTopics = [];

/**
 * The repartition topics the subtopology writes to.
 *
 * @var string[]
 */
protected $repartitionSinkTopics = [];

/**
 * The set of state changelog topics associated with this subtopology. Created automatically.
 *
 * @var TopicInfo[]
 */
protected $stateChangelogTopics = [];

/**
 * The set of source topics that are internally created repartition topics. Created automatically.
 *
 * @var TopicInfo[]
 */
protected $repartitionSourceTopics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('subtopologyId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('sourceTopics', 'string', true, [0,1], [0,1], [], [], null),
new ProtocolField('repartitionSinkTopics', 'string', true, [0,1], [0,1], [], [], null),
new ProtocolField('stateChangelogTopics', TopicInfo::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('repartitionSourceTopics', TopicInfo::class, true, [0,1], [0,1], [], [], null),

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
 * @return string[]
 */
public function getRepartitionSinkTopics(): array
{
    return $this->repartitionSinkTopics;
}

/**
 * @param string[] $repartitionSinkTopics
 *
 * @return self
 */
public function setRepartitionSinkTopics(array $repartitionSinkTopics): self
{
    $this->repartitionSinkTopics = $repartitionSinkTopics;

    return $this;
}
/**
 * @return TopicInfo[]
 */
public function getStateChangelogTopics(): array
{
    return $this->stateChangelogTopics;
}

/**
 * @param TopicInfo[] $stateChangelogTopics
 *
 * @return self
 */
public function setStateChangelogTopics(array $stateChangelogTopics): self
{
    $this->stateChangelogTopics = $stateChangelogTopics;

    return $this;
}
/**
 * @return TopicInfo[]
 */
public function getRepartitionSourceTopics(): array
{
    return $this->repartitionSourceTopics;
}

/**
 * @param TopicInfo[] $repartitionSourceTopics
 *
 * @return self
 */
public function setRepartitionSourceTopics(array $repartitionSourceTopics): self
{
    $this->repartitionSourceTopics = $repartitionSourceTopics;

    return $this;
}

}