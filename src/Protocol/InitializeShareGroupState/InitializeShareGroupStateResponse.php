<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\InitializeShareGroupState;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class InitializeShareGroupStateResponse extends AbstractResponse
{
    /**
 * The initialization results.
 *
 * @var InitializeStateResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('results', InitializeStateResult::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 83;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return InitializeStateResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param InitializeStateResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}