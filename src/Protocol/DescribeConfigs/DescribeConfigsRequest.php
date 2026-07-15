<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeConfigs;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeConfigsRequest extends AbstractRequest
{
    /**
 * The resources whose configurations we want to describe.
 *
 * @var DescribeConfigsResource[]
 */
protected $resources = [];

/**
 * True if we should include all synonyms.
 *
 * @var bool
 */
protected $includeSynonyms = false;

/**
 * True if we should include configuration documentation.
 *
 * @var bool
 */
protected $includeDocumentation = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('resources', DescribeConfigsResource::class, true, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('includeSynonyms', 'bool', false, [1,2,3,4], [4], [], [], null),
new ProtocolField('includeDocumentation', 'bool', false, [3,4], [4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 32;
}

public function getMaxSupportedVersion(): int
{
    return 4;
}

public function getFlexibleVersions(): array
{
    return [4];
}


    /**
 * @return DescribeConfigsResource[]
 */
public function getResources(): array
{
    return $this->resources;
}

/**
 * @param DescribeConfigsResource[] $resources
 *
 * @return self
 */
public function setResources(array $resources): self
{
    $this->resources = $resources;

    return $this;
}
/**
 * @return bool
 */
public function getIncludeSynonyms(): bool
{
    return $this->includeSynonyms;
}

/**
 * @param bool $includeSynonyms
 *
 * @return self
 */
public function setIncludeSynonyms(bool $includeSynonyms): self
{
    $this->includeSynonyms = $includeSynonyms;

    return $this;
}
/**
 * @return bool
 */
public function getIncludeDocumentation(): bool
{
    return $this->includeDocumentation;
}

/**
 * @param bool $includeDocumentation
 *
 * @return self
 */
public function setIncludeDocumentation(bool $includeDocumentation): self
{
    $this->includeDocumentation = $includeDocumentation;

    return $this;
}

}