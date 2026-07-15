<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

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
 * The error code, or 0 if there was no fetch error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The current high water mark.
 *
 * @var int
 */
protected $highWatermark = 0;

/**
 * The last stable offset (or LSO) of the partition. This is the last offset such that the state of all transactional records prior to this offset have been decided (ABORTED or COMMITTED).
 *
 * @var int
 */
protected $lastStableOffset = -1;

/**
 * The current log start offset.
 *
 * @var int
 */
protected $logStartOffset = -1;

/**
 * In case divergence is detected based on the `LastFetchedEpoch` and `FetchOffset` in the request, this field indicates the largest epoch and its end offset such that subsequent records are known to diverge.
 *
 * @var EpochEndOffset
 */
protected $divergingEpoch = null;

/**
 * The current leader of the partition.
 *
 * @var LeaderIdAndEpoch
 */
protected $currentLeader = null;

/**
 * In the case of fetching an offset less than the LogStartOffset, this is the end offset and epoch that should be used in the FetchSnapshot request.
 *
 * @var SnapshotId
 */
protected $snapshotId = null;

/**
 * The aborted transactions.
 *
 * @var AbortedTransaction[]|null
 */
protected $abortedTransactions = null;

/**
 * The preferred read replica for the consumer to use on its next fetch request.
 *
 * @var int
 */
protected $preferredReadReplica = -1;

/**
 * The record data.
 *
 * @var \longlang\phpkafka\Protocol\RecordBatch\RecordBatch|null
 */
protected $records = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('highWatermark', 'int64', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('lastStableOffset', 'int64', false, [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('logStartOffset', 'int64', false, [5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('abortedTransactions', AbortedTransaction::class, true, [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [], null),
new ProtocolField('preferredReadReplica', 'int32', false, [11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('records', 'records', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('divergingEpoch', EpochEndOffset::class, false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [12,13,14,15,16,17,18], 0),
new ProtocolField('currentLeader', LeaderIdAndEpoch::class, false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [12,13,14,15,16,17,18], 1),
new ProtocolField('snapshotId', SnapshotId::class, false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [12,13,14,15,16,17,18], 2),

        ];
    }
}
public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
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
 * @return int
 */
public function getHighWatermark(): int
{
    return $this->highWatermark;
}

/**
 * @param int $highWatermark
 *
 * @return self
 */
public function setHighWatermark(int $highWatermark): self
{
    $this->highWatermark = $highWatermark;

    return $this;
}
/**
 * @return int
 */
public function getLastStableOffset(): int
{
    return $this->lastStableOffset;
}

/**
 * @param int $lastStableOffset
 *
 * @return self
 */
public function setLastStableOffset(int $lastStableOffset): self
{
    $this->lastStableOffset = $lastStableOffset;

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
 * @return EpochEndOffset
 */
public function getDivergingEpoch(): EpochEndOffset
{
    return $this->divergingEpoch;
}

/**
 * @param EpochEndOffset $divergingEpoch
 *
 * @return self
 */
public function setDivergingEpoch(EpochEndOffset $divergingEpoch): self
{
    $this->divergingEpoch = $divergingEpoch;

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
 * @return SnapshotId
 */
public function getSnapshotId(): SnapshotId
{
    return $this->snapshotId;
}

/**
 * @param SnapshotId $snapshotId
 *
 * @return self
 */
public function setSnapshotId(SnapshotId $snapshotId): self
{
    $this->snapshotId = $snapshotId;

    return $this;
}
/**
 * @return AbortedTransaction[]|null
 */
public function getAbortedTransactions(): ?array
{
    return $this->abortedTransactions;
}

/**
 * @param AbortedTransaction[]|null $abortedTransactions
 *
 * @return self
 */
public function setAbortedTransactions(?array $abortedTransactions): self
{
    $this->abortedTransactions = $abortedTransactions;

    return $this;
}
/**
 * @return int
 */
public function getPreferredReadReplica(): int
{
    return $this->preferredReadReplica;
}

/**
 * @param int $preferredReadReplica
 *
 * @return self
 */
public function setPreferredReadReplica(int $preferredReadReplica): self
{
    $this->preferredReadReplica = $preferredReadReplica;

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

}