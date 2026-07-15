<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareAcknowledge;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionData extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The current leader of the partition.
 *
 * @var LeaderIdAndEpoch
 */
protected $currentLeader = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('currentLeader', LeaderIdAndEpoch::class, false, [0,1,2], [0,1,2], [], [], null),

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
public function getPartitionIndex(): int
{
    return $this->partitionIndex;
}

/**
 * @param int $partitionIndex
 *
 * @return self
 */
public function setPartitionIndex(int $partitionIndex): self
{
    $this->partitionIndex = $partitionIndex;

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
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
}
/**
 * @return LeaderIdAndEpoch
 */
public function getCurrentLeader(): LeaderIdAndEpoch
{
    return $this->currentLeader;
}

/**
 * @param LeaderIdAndEpoch $currentLeader
 *
 * @return self
 */
public function setCurrentLeader(LeaderIdAndEpoch $currentLeader): self
{
    $this->currentLeader = $currentLeader;

    return $this;
}

}