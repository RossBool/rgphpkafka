<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\WriteShareGroupState;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class WriteShareGroupStateResponse extends AbstractResponse
{
    /**
 * The write results.
 *
 * @var WriteStateResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('results', WriteStateResult::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 85;
}

public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return WriteStateResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param WriteStateResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}