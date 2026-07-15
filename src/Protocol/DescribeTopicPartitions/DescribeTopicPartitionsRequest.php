<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTopicPartitions;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeTopicPartitionsRequest extends AbstractRequest
{
    /**
 * The topics to fetch details for.
 *
 * @var TopicRequest[]
 */
protected $topics = [];

/**
 * The maximum number of partitions included in the response.
 *
 * @var int
 */
protected $responsePartitionLimit = 2000;

/**
 * The first topic and partition index to fetch details for.
 *
 * @var Cursor|null
 */
protected $cursor = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topics', TopicRequest::class, true, [0], [0], [], [], null),
new ProtocolField('responsePartitionLimit', 'int32', false, [0], [0], [], [], null),
new ProtocolField('cursor', Cursor::class, false, [0], [0], [0], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 75;
}

public function getMaxSupportedVersion(): int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return TopicRequest[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicRequest[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return int
 */
public function getResponsePartitionLimit(): int
{
    return $this->responsePartitionLimit;
}

/**
 * @param int $responsePartitionLimit
 *
 * @return self
 */
public function setResponsePartitionLimit(int $responsePartitionLimit): self
{
    $this->responsePartitionLimit = $responsePartitionLimit;

    return $this;
}
/**
 * @return Cursor|null
 */
public function getCursor(): ?Cursor
{
    return $this->cursor;
}

/**
 * @param Cursor|null $cursor
 *
 * @return self
 */
public function setCursor(?Cursor $cursor): self
{
    $this->cursor = $cursor;

    return $this;
}

}