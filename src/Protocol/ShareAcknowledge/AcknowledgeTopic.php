<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareAcknowledge;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AcknowledgeTopic extends AbstractStruct
{
    /**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The partitions containing records to acknowledge.
 *
 * @var AcknowledgePartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicId', 'uuid', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('partitions', AcknowledgePartition::class, true, [0,1,2], [0,1,2], [], [], null),

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
 * @return string
 */
public function getTopicId(): string
{
    return $this->topicId;
}

/**
 * @param string $topicId
 *
 * @return self
 */
public function setTopicId(string $topicId): self
{
    $this->topicId = $topicId;

    return $this;
}
/**
 * @return AcknowledgePartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param AcknowledgePartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}