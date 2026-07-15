<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsResponseGroup extends AbstractStruct
{
    /**
 * The group identifier.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The results for each topic.
 *
 * @var DescribeShareGroupOffsetsResponseTopic[]
 */
protected $topics = [];

/**
 * The group-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The group-level error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('topics', DescribeShareGroupOffsetsResponseTopic::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1], [0,1], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
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
 * @return DescribeShareGroupOffsetsResponseTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DescribeShareGroupOffsetsResponseTopic[] $topics
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
/**
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
}

}