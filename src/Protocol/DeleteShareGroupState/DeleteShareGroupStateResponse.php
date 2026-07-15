<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteShareGroupState;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteShareGroupStateResponse extends AbstractResponse
{
    /**
 * The delete results.
 *
 * @var DeleteStateResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('results', DeleteStateResult::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 86;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return DeleteStateResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param DeleteStateResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}