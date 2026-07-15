<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The results for each group.
 *
 * @var DescribeShareGroupOffsetsResponseGroup[]
 */
protected $groups = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('groups', DescribeShareGroupOffsetsResponseGroup::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 90;
}

public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

    return $this;
}
/**
 * @return DescribeShareGroupOffsetsResponseGroup[]
 */
public function getGroups(): array
{
    return $this->groups;
}

/**
 * @param DescribeShareGroupOffsetsResponseGroup[] $groups
 *
 * @return self
 */
public function setGroups(array $groups): self
{
    $this->groups = $groups;

    return $this;
}

}