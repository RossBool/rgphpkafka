<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteTopics;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteTopicsRequest extends AbstractRequest
{
    /**
 * The name or topic ID of the topic.
 *
 * @var DeleteTopicState[]
 */
protected $topics = [];

/**
 * The names of the topics to delete.
 *
 * @var string[]
 */
protected $topicNames = [];

/**
 * The length of time in milliseconds to wait for the deletions to complete.
 *
 * @var int
 */
protected $timeoutMs = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topics', DeleteTopicState::class, true, [6], [4,5,6], [], [], null),
new ProtocolField('topicNames', 'string', true, [0,1,2,3,4,5], [4,5,6], [], [], null),
new ProtocolField('timeoutMs', 'int32', false, [0,1,2,3,4,5,6], [4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 20;
}

public function getMaxSupportedVersion(): int
{
    return 6;
}

public function getFlexibleVersions(): array
{
    return [4,5,6];
}


    /**
 * @return DeleteTopicState[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DeleteTopicState[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return string[]
 */
public function getTopicNames(): array
{
    return $this->topicNames;
}

/**
 * @param string[] $topicNames
 *
 * @return self
 */
public function setTopicNames(array $topicNames): self
{
    $this->topicNames = $topicNames;

    return $this;
}
/**
 * @return int
 */
public function getTimeoutMs(): int
{
    return $this->timeoutMs;
}

/**
 * @param int $timeoutMs
 *
 * @return self
 */
public function setTimeoutMs(int $timeoutMs): self
{
    $this->timeoutMs = $timeoutMs;

    return $this;
}

}