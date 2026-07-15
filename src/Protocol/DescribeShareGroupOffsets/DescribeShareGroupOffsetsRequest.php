<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsRequest extends AbstractRequest
{
    /**
 * The groups to describe offsets for.
 *
 * @var DescribeShareGroupOffsetsRequestGroup[]
 */
protected $groups = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groups', DescribeShareGroupOffsetsRequestGroup::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 90;
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
 * @return DescribeShareGroupOffsetsRequestGroup[]
 */
public function getGroups(): array
{
    return $this->groups;
}

/**
 * @param DescribeShareGroupOffsetsRequestGroup[] $groups
 *
 * @return self
 */
public function setGroups(array $groups): self
{
    $this->groups = $groups;

    return $this;
}

}