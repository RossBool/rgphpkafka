<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

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
 * The fetch error code, or 0 if there was no fetch error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The fetch error message, or null if there was no fetch error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The acknowledge error code, or 0 if there was no acknowledge error.
 *
 * @var int
 */
protected $acknowledgeErrorCode = 0;

/**
 * The acknowledge error message, or null if there was no acknowledge error.
 *
 * @var string|null
 */
protected $acknowledgeErrorMessage = null;

/**
 * The current leader of the partition.
 *
 * @var LeaderIdAndEpoch
 */
protected $currentLeader = null;

/**
 * The record data.
 *
 * @var \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null
 */
protected $records = null;

/**
 * The acquired records.
 *
 * @var AcquiredRecords[]
 */
protected $acquiredRecords = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('acknowledgeErrorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('acknowledgeErrorMessage', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('currentLeader', LeaderIdAndEpoch::class, false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('records', 'records', false, [0,1,2], [0,1,2], [0], [], null),
new ProtocolField('acquiredRecords', AcquiredRecords::class, true, [0,1,2], [0,1,2], [], [], null),

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
 * @return int
 */
public function getAcknowledgeErrorCode(): int
{
    return $this->acknowledgeErrorCode;
}

/**
 * @param int $acknowledgeErrorCode
 *
 * @return self
 */
public function setAcknowledgeErrorCode(int $acknowledgeErrorCode): self
{
    $this->acknowledgeErrorCode = $acknowledgeErrorCode;

    return $this;
}
/**
 * @return string|null
 */
public function getAcknowledgeErrorMessage(): ?string
{
    return $this->acknowledgeErrorMessage;
}

/**
 * @param string|null $acknowledgeErrorMessage
 *
 * @return self
 */
public function setAcknowledgeErrorMessage(?string $acknowledgeErrorMessage): self
{
    $this->acknowledgeErrorMessage = $acknowledgeErrorMessage;

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
/**
 * @return \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null
 */
public function getRecords(): ?\longlang\phpkafka\Protocol\RecordBatch\RecordBatch
{
    return $this->records;
}

/**
 * @param \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null $records
 *
 * @return self
 */
public function setRecords(?\longlang\phpkafka\Protocol\RecordBatch\RecordBatch $records): self
{
    $this->records = $records;

    return $this;
}
/**
 * @return AcquiredRecords[]
 */
public function getAcquiredRecords(): array
{
    return $this->acquiredRecords;
}

/**
 * @param AcquiredRecords[] $acquiredRecords
 *
 * @return self
 */
public function setAcquiredRecords(array $acquiredRecords): self
{
    $this->acquiredRecords = $acquiredRecords;

    return $this;
}

}