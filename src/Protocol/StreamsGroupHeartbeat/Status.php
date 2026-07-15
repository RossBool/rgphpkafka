<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Status extends AbstractStruct
{
    /**
 * A code to indicate that a particular status is active for the group membership
 *
 * @var int
 */
protected $statusCode = 0;

/**
 * A string representation of the status.
 *
 * @var string
 */
protected $statusDetail = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('statusCode', 'int8', false, [0,1], [0,1], [], [], null),
new ProtocolField('statusDetail', 'string', false, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return int
 */
public function getStatusCode(): int
{
    return $this->statusCode;
}

/**
 * @param int $statusCode
 *
 * @return self
 */
public function setStatusCode(int $statusCode): self
{
    $this->statusCode = $statusCode;

    return $this;
}
/**
 * @return string
 */
public function getStatusDetail(): string
{
    return $this->statusDetail;
}

/**
 * @param string $statusDetail
 *
 * @return self
 */
public function setStatusDetail(string $statusDetail): self
{
    $this->statusDetail = $statusDetail;

    return $this;
}

}