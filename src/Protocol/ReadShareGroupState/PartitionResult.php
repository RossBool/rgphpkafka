<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupState;

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
 * The share-partition start offset, which can be -1 if it is not yet initialized.
 *
 * @var int
 */
protected $startOffset = 0;

/**
 * The state batches for this share-partition.
 *
 * @var StateBatch[]
 */
protected $stateBatches = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0], [0], [0], [], null),
new ProtocolField('stateEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('startOffset', 'int64', false, [0], [0], [], [], null),
new ProtocolField('stateBatches', StateBatch::class, true, [0], [0], [], [], null),

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
 * @return StateBatch[]
 */
public function getStateBatches(): array
{
    return $this->stateBatches;
}

/**
 * @param StateBatch[] $stateBatches
 *
 * @return self
 */
public function setStateBatches(array $stateBatches): self
{
    $this->stateBatches = $stateBatches;

    return $this;
}

}