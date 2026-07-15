<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateRaftVoter;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class UpdateRaftVoterResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * Details of the current Raft cluster leader.
 *
 * @var CurrentLeader
 */
protected $currentLeader = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('currentLeader', CurrentLeader::class, false, [0], [0], [], [0], 0),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 82;
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
 * @return int
 */
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
}
/**
 * @return CurrentLeader
 */
public function getCurrentLeader(): CurrentLeader
{
    return $this->currentLeader;
}

/**
 * @param CurrentLeader $currentLeader
 *
 * @return self
 */
public function setCurrentLeader(CurrentLeader $currentLeader): self
{
    $this->currentLeader = $currentLeader;

    return $this;
}

}