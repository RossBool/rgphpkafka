<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Metadata;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MetadataResponseTopic extends AbstractStruct
{
    /**
 * The topic error, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The topic name. Null for non-existing topics queried by ID. This is never null when ErrorCode is zero. One of Name and TopicId is always populated.
 *
 * @var string|null
 */
protected $name = null;

/**
 * The topic id. Zero for non-existing topics queried by name. This is never zero when ErrorCode is zero. One of Name and TopicId is always populated.
 *
 * @var string
 */
protected $topicId = '';

/**
 * True if the topic is internal.
 *
 * @var bool
 */
protected $isInternal = false;

/**
 * Each partition in the topic.
 *
 * @var MetadataResponsePartition[]
 */
protected $partitions = [];

/**
 * 32-bit bitfield to represent authorized operations for this topic.
 *
 * @var int
 */
protected $topicAuthorizedOperations = -2147483648;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [12,13], [], null),
new ProtocolField('topicId', 'uuid', false, [10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('isInternal', 'bool', false, [1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('partitions', MetadataResponsePartition::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('topicAuthorizedOperations', 'int32', false, [8,9,10,11,12,13], [9,10,11,12,13], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
}


    /**
 * @return int
 */
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
}
/**
 * @return string|null
 */
public function getName(): ?string
{
    return $this->name;
}

/**
 * @param string|null $name
 *
 * @return self
 */
public function setName(?string $name): self
{
    $this->name = $name;

    return $this;
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
 * @return bool
 */
public function getIsInternal(): bool
{
    return $this->isInternal;
}

/**
 * @param bool $isInternal
 *
 * @return self
 */
public function setIsInternal(bool $isInternal): self
{
    $this->isInternal = $isInternal;

    return $this;
}
/**
 * @return MetadataResponsePartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param MetadataResponsePartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}
/**
 * @return int
 */
public function getTopicAuthorizedOperations(): int
{
    return $this->topicAuthorizedOperations;
}

/**
 * @param int $topicAuthorizedOperations
 *
 * @return self
 */
public function setTopicAuthorizedOperations(int $topicAuthorizedOperations): self
{
    $this->topicAuthorizedOperations = $topicAuthorizedOperations;

    return $this;
}

}