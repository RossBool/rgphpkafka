<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupStateSummary;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ReadShareGroupStateSummaryResponse extends AbstractResponse
{
    /**
 * The read results.
 *
 * @var ReadStateSummaryResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('results', ReadStateSummaryResult::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 87;
}

public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return ReadStateSummaryResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param ReadStateSummaryResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}