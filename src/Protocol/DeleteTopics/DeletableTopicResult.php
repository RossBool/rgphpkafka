<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteTopics;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DeletableTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string|null
 */
protected $name = null;

/**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The deletion error, or 0 if the deletion succeeded.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6], [4,5,6], [6], [], null),
new ProtocolField('topicId', 'uuid', false, [6], [4,5,6], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6], [4,5,6], [], [], null),
new ProtocolField('errorMessage', 'string', false, [5,6], [4,5,6], [5,6], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4,5,6];
}


    /**
 * @return string|null
 */
public function getName(): ?string
{
    return $this->name;
}

/**
 * @param string|null $name
 *
 * @return self
 */
public function setName(?string $name): self
{
    $this->name = $name;

    return $this;
}
/**
 * @return string
 */
public function getTopicId(): string
{
    return $this->topicId;
}

/**
 * @param string $topicId
 *
 * @return self
 */
public function setTopicId(string $topicId): self
{
    $this->topicId = $topicId;

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