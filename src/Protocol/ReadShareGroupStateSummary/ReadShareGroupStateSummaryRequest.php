<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupStateSummary;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ReadShareGroupStateSummaryRequest extends AbstractRequest
{
    /**
 * The group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The data for the topics.
 *
 * @var ReadStateSummaryData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('topics', ReadStateSummaryData::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 87;
}

public function getMaxSupportedVersion(): int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return string
 */
public function getGroupId(): string
{
    return $this->groupId;
}

/**
 * @param string $groupId
 *
 * @return self
 */
public function setGroupId(string $groupId): self
{
    $this->groupId = $groupId;

    return $this;
}
/**
 * @return ReadStateSummaryData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param ReadStateSummaryData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}