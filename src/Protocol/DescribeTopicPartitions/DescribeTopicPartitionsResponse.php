<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTopicPartitions;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeTopicPartitionsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * Each topic in the response.
 *
 * @var DescribeTopicPartitionsResponseTopic[]
 */
protected $topics = [];

/**
 * The next topic and partition index to fetch details for.
 *
 * @var Cursor|null
 */
protected $nextCursor = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('topics', DescribeTopicPartitionsResponseTopic::class, true, [0], [0], [], [], null),
new ProtocolField('nextCursor', Cursor::class, false, [0], [0], [0], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 75;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

    return $this;
}
/**
 * @return DescribeTopicPartitionsResponseTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DescribeTopicPartitionsResponseTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return Cursor|null
 */
public function getNextCursor(): ?Cursor
{
    return $this->nextCursor;
}

/**
 * @param Cursor|null $nextCursor
 *
 * @return self
 */
public function setNextCursor(?Cursor $nextCursor): self
{
    $this->nextCursor = $nextCursor;

    return $this;
}

}