<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListGroups;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ListGroupsRequest extends AbstractRequest
{
    /**
 * The states of the groups we want to list. If empty, all groups are returned with their state.
 *
 * @var string[]
 */
protected $statesFilter = [];

/**
 * The types of the groups we want to list. If empty, all groups are returned with their type.
 *
 * @var string[]
 */
protected $typesFilter = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('statesFilter', 'string', true, [4,5], [3,4,5], [], [], null),
new ProtocolField('typesFilter', 'string', true, [5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 16;
}

public function getMaxSupportedVersion(): int
{
    return 5;
}

public function getFlexibleVersions(): array
{
    return [3,4,5];
}


    /**
 * @return string[]
 */
public function getStatesFilter(): array
{
    return $this->statesFilter;
}

/**
 * @param string[] $statesFilter
 *
 * @return self
 */
public function setStatesFilter(array $statesFilter): self
{
    $this->statesFilter = $statesFilter;

    return $this;
}
/**
 * @return string[]
 */
public function getTypesFilter(): array
{
    return $this->typesFilter;
}

/**
 * @param string[] $typesFilter
 *
 * @return self
 */
public function setTypesFilter(array $typesFilter): self
{
    $this->typesFilter = $typesFilter;

    return $this;
}

}