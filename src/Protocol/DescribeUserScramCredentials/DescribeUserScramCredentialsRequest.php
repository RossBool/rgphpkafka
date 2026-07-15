<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeUserScramCredentialsRequest extends AbstractRequest
{
    /**
 * The users to describe, or null/empty to describe all users.
 *
 * @var UserName[]|null
 */
protected $users = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('users', UserName::class, true, [0], [0], [0], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 50;
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
 * @return UserName[]|null
 */
public function getUsers(): ?array
{
    return $this->users;
}

/**
 * @param UserName[]|null $users
 *
 * @return self
 */
public function setUsers(?array $users): self
{
    $this->users = $users;

    return $this;
}

}