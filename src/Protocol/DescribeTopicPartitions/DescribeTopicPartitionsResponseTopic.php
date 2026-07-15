<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTopicPartitions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeTopicPartitionsResponseTopic extends AbstractStruct
{
    /**
 * The topic error, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The topic name.
 *
 * @var string|null
 */
protected $name = null;

/**
 * The topic id.
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
 * @var DescribeTopicPartitionsResponsePartition[]
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
            new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('name', 'string', false, [0], [0], [0], [], null),
new ProtocolField('topicId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('isInternal', 'bool', false, [0], [0], [], [], null),
new ProtocolField('partitions', DescribeTopicPartitionsResponsePartition::class, true, [0], [0], [], [], null),
new ProtocolField('topicAuthorizedOperations', 'int32', false, [0], [0], [], [], null),

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
 * @return DescribeTopicPartitionsResponsePartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param DescribeTopicPartitionsResponsePartition[] $partitions
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