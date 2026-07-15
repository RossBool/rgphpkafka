<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class LeaderIdAndEpoch extends AbstractStruct
{
    /**
 * The ID of the current leader or -1 if the leader is unknown.
 *
 * @var int
 */
protected $leaderId = 0;

/**
 * The latest known leader epoch.
 *
 * @var int
 */
protected $leaderEpoch = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('leaderId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return int
 */
public function getLeaderId(): int
{
    return $this->leaderId;
}

/**
 * @param int $leaderId
 *
 * @return self
 */
public function setLeaderId(int $leaderId): self
{
    $this->leaderId = $leaderId;

    return $this;
}
/**
 * @return int
 */
public function getLeaderEpoch(): int
{
    return $this->leaderEpoch;
}

/**
 * @param int $leaderEpoch
 *
 * @return self
 */
public function setLeaderEpoch(int $leaderEpoch): self
{
    $this->leaderEpoch = $leaderEpoch;

    return $this;
}

}