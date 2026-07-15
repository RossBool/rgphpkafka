<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterUserScramCredentialsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The results for deletions and alterations, one per affected user.
 *
 * @var AlterUserScramCredentialsResult[]
 */
protected $results = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('results', AlterUserScramCredentialsResult::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 51;
}

public function getFlexibleVersions(): array
{
    return [0];
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
 * @return AlterUserScramCredentialsResult[]
 */
public function getResults(): array
{
    return $this->results;
}

/**
 * @param AlterUserScramCredentialsResult[] $results
 *
 * @return self
 */
public function setResults(array $results): self
{
    $this->results = $results;

    return $this;
}

}