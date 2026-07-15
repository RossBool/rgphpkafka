<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeUserScramCredentialsResult extends AbstractStruct
{
    /**
 * The user name.
 *
 * @var string
 */
protected $user = '';

/**
 * The user-level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The user-level error message, if any.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The mechanism and related information associated with the user's SCRAM credentials.
 *
 * @var CredentialInfo[]
 */
protected $credentialInfos = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('user', 'string', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0], [0], [0], [], null),
new ProtocolField('credentialInfos', CredentialInfo::class, true, [0], [0], [], [], null),

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
/**
 * @return CredentialInfo[]
 */
public function getCredentialInfos(): array
{
    return $this->credentialInfos;
}

/**
 * @param CredentialInfo[] $credentialInfos
 *
 * @return self
 */
public function setCredentialInfos(array $credentialInfos): self
{
    $this->credentialInfos = $credentialInfos;

    return $this;
}

}