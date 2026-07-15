<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateRaftVoter;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CurrentLeader extends AbstractStruct
{
    /**
 * The replica id of the current leader or -1 if the leader is unknown.
 *
 * @var int
 */
protected $leaderId = -1;

/**
 * The latest known leader epoch.
 *
 * @var int
 */
protected $leaderEpoch = -1;

/**
 * The node's hostname.
 *
 * @var string
 */
protected $host = '';

/**
 * The node's port.
 *
 * @var int
 */
protected $port = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('leaderId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('host', 'string', false, [0], [0], [], [], null),
new ProtocolField('port', 'int32', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
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
/**
 * @return string
 */
public function getHost(): string
{
    return $this->host;
}

/**
 * @param string $host
 *
 * @return self
 */
public function setHost(string $host): self
{
    $this->host = $host;

    return $this;
}
/**
 * @return int
 */
public function getPort(): int
{
    return $this->port;
}

/**
 * @param int $port
 *
 * @return self
 */
public function setPort(int $port): self
{
    $this->port = $port;

    return $this;
}

}