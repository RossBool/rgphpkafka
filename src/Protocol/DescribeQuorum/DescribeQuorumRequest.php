<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeQuorum;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeQuorumRequest extends AbstractRequest
{
    /**
 * The topics to describe.
 *
 * @var TopicData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topics', TopicData::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 55;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return TopicData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}