<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeProducers;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeProducersRequest extends AbstractRequest
{
    /**
 * The topics to list producers for.
 *
 * @var TopicRequest[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topics', TopicRequest::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 61;
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

}