<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterUserScramCredentialsResult extends AbstractStruct
{
    /**
 * The user name.
 *
 * @var string
 */
protected $user = '';

/**
 * The error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, if any.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('user', 'string', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0], [0], [0], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string
 */
public function getUser(): string
{
    return $this->user;
}

/**
 * @param string $user
 *
 * @return self
 */
public function setUser(string $user): self
{
    $this->user = $user;

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