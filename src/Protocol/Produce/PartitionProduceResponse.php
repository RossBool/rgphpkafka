<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionProduceResponse extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $index = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The base offset.
 *
 * @var int
 */
protected $baseOffset = 0;

/**
 * The timestamp returned by broker after appending the messages. If CreateTime is used for the topic, the timestamp will be -1.  If LogAppendTime is used for the topic, the timestamp will be the broker local time when the messages are appended.
 *
 * @var int
 */
protected $logAppendTimeMs = -1;

/**
 * The log start offset.
 *
 * @var int
 */
protected $logStartOffset = -1;

/**
 * The batch indices of records that caused the batch to be dropped.
 *
 * @var BatchIndexAndErrorMessage[]
 */
protected $recordErrors = [];

/**
 * The global error message summarizing the common root cause of the records that caused the batch to be dropped.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The leader broker that the producer should use for future requests.
 *
 * @var LeaderIdAndEpoch
 */
protected $currentLeader = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('index', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('baseOffset', 'int64', false, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('logAppendTimeMs', 'int64', false, [2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('logStartOffset', 'int64', false, [5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('recordErrors', BatchIndexAndErrorMessage::class, true, [8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('errorMessage', 'string', false, [8,9,10,11,12], [9,10,11,12], [8,9,10,11,12], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('currentLeader', LeaderIdAndEpoch::class, false, [10,11,12], [9,10,11,12], [], [10,11,12], 0),

        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12];
}


    /**
 * @return int
 */
public function getIndex(): int
{
    return $this->index;
}

/**
 * @param int $index
 *
 * @return self
 */
public function setIndex(int $index): self
{
    $this->index = $index;

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
 * @return int
 */
public function getBaseOffset(): int
{
    return $this->baseOffset;
}

/**
 * @param int $baseOffset
 *
 * @return self
 */
public function setBaseOffset(int $baseOffset): self
{
    $this->baseOffset = $baseOffset;

    return $this;
}
/**
 * @return int
 */
public function getLogAppendTimeMs(): int
{
    return $this->logAppendTimeMs;
}

/**
 * @param int $logAppendTimeMs
 *
 * @return self
 */
public function setLogAppendTimeMs(int $logAppendTimeMs): self
{
    $this->logAppendTimeMs = $logAppendTimeMs;

    return $this;
}
/**
 * @return int
 */
public function getLogStartOffset(): int
{
    return $this->logStartOffset;
}

/**
 * @param int $logStartOffset
 *
 * @return self
 */
public function setLogStartOffset(int $logStartOffset): self
{
    $this->logStartOffset = $logStartOffset;

    return $this;
}
/**
 * @return BatchIndexAndErrorMessage[]
 */
public function getRecordErrors(): array
{
    return $this->recordErrors;
}

/**
 * @param BatchIndexAndErrorMessage[] $recordErrors
 *
 * @return self
 */
public function setRecordErrors(array $recordErrors): self
{
    $this->recordErrors = $recordErrors;

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