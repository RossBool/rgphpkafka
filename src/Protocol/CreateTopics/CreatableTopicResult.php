<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateTopics;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CreatableTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * Optional topic config error returned if configs are not returned in the response.
 *
 * @var int
 */
protected $topicConfigErrorCode = 0;

/**
 * Number of partitions of the topic.
 *
 * @var int
 */
protected $numPartitions = -1;

/**
 * Replication factor of the topic.
 *
 * @var int
 */
protected $replicationFactor = -1;

/**
 * Configuration of the topic.
 *
 * @var CreatableTopicConfigs[]|null
 */
protected $configs = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('topicId', 'uuid', false, [7], [5,6,7], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('errorMessage', 'string', false, [1,2,3,4,5,6,7], [5,6,7], [0,1,2,3,4,5,6,7], [], null),
new ProtocolField('numPartitions', 'int32', false, [5,6,7], [5,6,7], [], [], null),
new ProtocolField('replicationFactor', 'int16', false, [5,6,7], [5,6,7], [], [], null),
new ProtocolField('configs', CreatableTopicConfigs::class, true, [5,6,7], [5,6,7], [5,6,7], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('topicConfigErrorCode', 'int16', false, [5,6,7], [5,6,7], [], [5,6,7], 0),

        ];
    }
}
public function getFlexibleVersions(): array
{
    return [5,6,7];
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
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
}
/**
 * @return int
 */
public function getTopicConfigErrorCode(): int
{
    return $this->topicConfigErrorCode;
}

/**
 * @param int $topicConfigErrorCode
 *
 * @return self
 */
public function setTopicConfigErrorCode(int $topicConfigErrorCode): self
{
    $this->topicConfigErrorCode = $topicConfigErrorCode;

    return $this;
}
/**
 * @return int
 */
public function getNumPartitions(): int
{
    return $this->numPartitions;
}

/**
 * @param int $numPartitions
 *
 * @return self
 */
public function setNumPartitions(int $numPartitions): self
{
    $this->numPartitions = $numPartitions;

    return $this;
}
/**
 * @return int
 */
public function getReplicationFactor(): int
{
    return $this->replicationFactor;
}

/**
 * @param int $replicationFactor
 *
 * @return self
 */
public function setReplicationFactor(int $replicationFactor): self
{
    $this->replicationFactor = $replicationFactor;

    return $this;
}
/**
 * @return CreatableTopicConfigs[]|null
 */
public function getConfigs(): ?array
{
    return $this->configs;
}

/**
 * @param CreatableTopicConfigs[]|null $configs
 *
 * @return self
 */
public function setConfigs(?array $configs): self
{
    $this->configs = $configs;

    return $this;
}

}