<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupStateSummary;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionResult extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

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
 * The state epoch of the share-partition.
 *
 * @var int
 */
protected $stateEpoch = 0;

/**
 * The leader epoch of the share-partition.
 *
 * @var int
 */
protected $leaderEpoch = 0;

/**
 * The share-partition start offset.
 *
 * @var int
 */
protected $startOffset = 0;

/**
 * The number of offsets greater than or equal to share-partition start offset for which delivery has been completed.
 *
 * @var int
 */
protected $deliveryCompleteCount = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1], [0,1], [], null),
new ProtocolField('stateEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('startOffset', 'int64', false, [0,1], [0,1], [], [], null),
new ProtocolField('deliveryCompleteCount', 'int32', false, [1], [0,1], [], [], null),

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
public function getPartition(): int
{
    return $this->partition;
}

/**
 * @param int $partition
 *
 * @return self
 */
public function setPartition(int $partition): self
{
    $this->partition = $partition;

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
 * @return int
 */
public function getStateEpoch(): int
{
    return $this->stateEpoch;
}

/**
 * @param int $stateEpoch
 *
 * @return self
 */
public function setStateEpoch(int $stateEpoch): self
{
    $this->stateEpoch = $stateEpoch;

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
 * @return int
 */
public function getStartOffset(): int
{
    return $this->startOffset;
}

/**
 * @param int $startOffset
 *
 * @return self
 */
public function setStartOffset(int $startOffset): self
{
    $this->startOffset = $startOffset;

    return $this;
}
/**
 * @return int
 */
public function getDeliveryCompleteCount(): int
{
    return $this->deliveryCompleteCount;
}

/**
 * @param int $deliveryCompleteCount
 *
 * @return self
 */
public function setDeliveryCompleteCount(int $deliveryCompleteCount): self
{
    $this->deliveryCompleteCount = $deliveryCompleteCount;

    return $this;
}

}