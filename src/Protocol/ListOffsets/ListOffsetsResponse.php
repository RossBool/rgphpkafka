<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListOffsets;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ListOffsetsResponse extends AbstractResponse
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
 * @var ListOffsetsTopicResponse[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('topics', ListOffsetsTopicResponse::class, true, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [6,7,8,9,10,11];
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
 * @return ListOffsetsTopicResponse[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param ListOffsetsTopicResponse[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}