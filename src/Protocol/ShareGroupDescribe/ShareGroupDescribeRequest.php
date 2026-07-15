<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareGroupDescribe;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ShareGroupDescribeRequest extends AbstractRequest
{
    /**
 * The ids of the groups to describe.
 *
 * @var string[]
 */
protected $groupIds = [];

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
            new ProtocolField('groupIds', 'string', true, [0,1], [0,1], [], [], null),
new ProtocolField('includeAuthorizedOperations', 'bool', false, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 77;
}

public function getMaxSupportedVersion(): int
{
    return 1;
}

public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return string[]
 */
public function getGroupIds(): array
{
    return $this->groupIds;
}

/**
 * @param string[] $groupIds
 *
 * @return self
 */
public function setGroupIds(array $groupIds): self
{
    $this->groupIds = $groupIds;

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