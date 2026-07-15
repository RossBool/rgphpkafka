<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteShareGroupState;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteShareGroupStateRequest extends AbstractRequest
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
 * @var DeleteStateData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0], [0], [], [], null),
new ProtocolField('topics', DeleteStateData::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 86;
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
 * @return DeleteStateData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DeleteStateData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}