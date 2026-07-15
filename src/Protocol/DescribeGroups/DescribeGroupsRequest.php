<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeGroups;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeGroupsRequest extends AbstractRequest
{
    /**
 * The names of the groups to describe.
 *
 * @var string[]
 */
protected $groups = [];

/**
 * Whether to include authorized operations.
 *
 * @var bool
 */
protected $includeAuthorizedOperations = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groups', 'string', true, [0,1,2,3,4,5,6], [5,6], [], [], null),
new ProtocolField('includeAuthorizedOperations', 'bool', false, [3,4,5,6], [5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 15;
}

public function getMaxSupportedVersion(): int
{
    return 6;
}

public function getFlexibleVersions(): array
{
    return [5,6];
}


    /**
 * @return string[]
 */
public function getGroups(): array
{
    return $this->groups;
}

/**
 * @param string[] $groups
 *
 * @return self
 */
public function setGroups(array $groups): self
{
    $this->groups = $groups;

    return $this;
}
/**
 * @return bool
 */
public function getIncludeAuthorizedOperations(): bool
{
    return $this->includeAuthorizedOperations;
}

/**
 * @param bool $includeAuthorizedOperations
 *
 * @return self
 */
public function setIncludeAuthorizedOperations(bool $includeAuthorizedOperations): self
{
    $this->includeAuthorizedOperations = $includeAuthorizedOperations;

    return $this;
}

}