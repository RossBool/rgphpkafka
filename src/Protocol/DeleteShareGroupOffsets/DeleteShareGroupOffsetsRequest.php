<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteShareGroupOffsetsRequest extends AbstractRequest
{
    /**
 * The group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The topics to delete offsets for.
 *
 * @var DeleteShareGroupOffsetsRequestTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0], [0], [], [], null),
new ProtocolField('topics', DeleteShareGroupOffsetsRequestTopic::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 92;
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
 * @return DeleteShareGroupOffsetsRequestTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DeleteShareGroupOffsetsRequestTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}