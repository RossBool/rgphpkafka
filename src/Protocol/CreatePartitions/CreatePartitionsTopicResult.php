<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreatePartitions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CreatePartitionsTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The result error, or zero if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The result message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3], [2,3], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2,3], [2,3], [0,1,2,3], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3];
}


    /**
 * @return string
 */
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

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