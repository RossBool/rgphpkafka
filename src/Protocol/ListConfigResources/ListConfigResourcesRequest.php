<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListConfigResources;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ListConfigResourcesRequest extends AbstractRequest
{
    /**
 * The list of resource type. If the list is empty, it uses default supported config resource types.
 *
 * @var int[]
 */
protected $resourceTypes = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resourceTypes', 'int8', true, [1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 74;
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
 * @return int[]
 */
public function getResourceTypes(): array
{
    return $this->resourceTypes;
}

/**
 * @param int[] $resourceTypes
 *
 * @return self
 */
public function setResourceTypes(array $resourceTypes): self
{
    $this->resourceTypes = $resourceTypes;

    return $this;
}

}