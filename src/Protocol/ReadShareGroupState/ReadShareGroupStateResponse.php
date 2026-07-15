<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupState;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ReadShareGroupStateResponse extends AbstractResponse
{
    /**
 * The read results.
 *
 * @var ReadStateResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('results', ReadStateResult::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 84;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return ReadStateResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param ReadStateResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}