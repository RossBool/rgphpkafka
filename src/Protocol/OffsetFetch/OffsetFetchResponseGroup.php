<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetFetchResponseGroup extends AbstractStruct
{
    /**
 * The group ID.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The responses per topic.
 *
 * @var OffsetFetchResponseTopics[]
 */
protected $topics = [];

/**
 * The group-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('topics', OffsetFetchResponseTopics::class, true, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('errorCode', 'int16', false, [8,9,10], [6,7,8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10];
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
 * @return OffsetFetchResponseTopics[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param OffsetFetchResponseTopics[] $topics
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

}