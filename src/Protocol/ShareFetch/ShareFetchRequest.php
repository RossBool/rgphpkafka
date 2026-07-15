<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ShareFetchRequest extends AbstractRequest
{
    /**
 * The group identifier.
 *
 * @var string|null
 */
protected $groupId = null;

/**
 * The member ID.
 *
 * @var string|null
 */
protected $memberId = null;

/**
 * The current share session epoch: 0 to open a share session; -1 to close it; otherwise increments for consecutive requests.
 *
 * @var int
 */
protected $shareSessionEpoch = 0;

/**
 * The maximum time in milliseconds to wait for the response.
 *
 * @var int
 */
protected $maxWaitMs = 0;

/**
 * The minimum bytes to accumulate in the response.
 *
 * @var int
 */
protected $minBytes = 0;

/**
 * The maximum bytes to fetch. See KIP-74 for cases where this limit may not be honored.
 *
 * @var int
 */
protected $maxBytes = 0x7fffffff;

/**
 * The maximum number of records to fetch. This limit can be exceeded for alignment of batch boundaries.
 *
 * @var int
 */
protected $maxRecords = 0;

/**
 * The optimal number of records for batches of acquired records and acknowledgements.
 *
 * @var int
 */
protected $batchSize = 0;

/**
 * The acquire mode to control the fetch behavior - 0:batch-optimized,1:record-limit.
 *
 * @var int
 */
protected $shareAcquireMode = 0;

/**
 * Whether Renew type acknowledgements present in AcknowledgementBatches.
 *
 * @var bool
 */
protected $isRenewAck = false;

/**
 * The topics to fetch.
 *
 * @var FetchTopic[]
 */
protected $topics = [];

/**
 * The partitions to remove from this share session.
 *
 * @var ForgottenTopic[]
 */
protected $forgottenTopicsData = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('memberId', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('shareSessionEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('maxWaitMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('minBytes', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('maxBytes', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('maxRecords', 'int32', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('batchSize', 'int32', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('shareAcquireMode', 'int8', false, [2], [0,1,2], [], [], null),
new ProtocolField('isRenewAck', 'bool', false, [2], [0,1,2], [], [], null),
new ProtocolField('topics', FetchTopic::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('forgottenTopicsData', ForgottenTopic::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 78;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return string|null
 */
public function getGroupId(): ?string
{
    return $this->groupId;
}

/**
 * @param string|null $groupId
 *
 * @return self
 */
public function setGroupId(?string $groupId): self
{
    $this->groupId = $groupId;

    return $this;
}
/**
 * @return string|null
 */
public function getMemberId(): ?string
{
    return $this->memberId;
}

/**
 * @param string|null $memberId
 *
 * @return self
 */
public function setMemberId(?string $memberId): self
{
    $this->memberId = $memberId;

    return $this;
}
/**
 * @return int
 */
public function getShareSessionEpoch(): int
{
    return $this->shareSessionEpoch;
}

/**
 * @param int $shareSessionEpoch
 *
 * @return self
 */
public function setShareSessionEpoch(int $shareSessionEpoch): self
{
    $this->shareSessionEpoch = $shareSessionEpoch;

    return $this;
}
/**
 * @return int
 */
public function getMaxWaitMs(): int
{
    return $this->maxWaitMs;
}

/**
 * @param int $maxWaitMs
 *
 * @return self
 */
public function setMaxWaitMs(int $maxWaitMs): self
{
    $this->maxWaitMs = $maxWaitMs;

    return $this;
}
/**
 * @return int
 */
public function getMinBytes(): int
{
    return $this->minBytes;
}

/**
 * @param int $minBytes
 *
 * @return self
 */
public function setMinBytes(int $minBytes): self
{
    $this->minBytes = $minBytes;

    return $this;
}
/**
 * @return int
 */
public function getMaxBytes(): int
{
    return $this->maxBytes;
}

/**
 * @param int $maxBytes
 *
 * @return self
 */
public function setMaxBytes(int $maxBytes): self
{
    $this->maxBytes = $maxBytes;

    return $this;
}
/**
 * @return int
 */
public function getMaxRecords(): int
{
    return $this->maxRecords;
}

/**
 * @param int $maxRecords
 *
 * @return self
 */
public function setMaxRecords(int $maxRecords): self
{
    $this->maxRecords = $maxRecords;

    return $this;
}
/**
 * @return int
 */
public function getBatchSize(): int
{
    return $this->batchSize;
}

/**
 * @param int $batchSize
 *
 * @return self
 */
public function setBatchSize(int $batchSize): self
{
    $this->batchSize = $batchSize;

    return $this;
}
/**
 * @return int
 */
public function getShareAcquireMode(): int
{
    return $this->shareAcquireMode;
}

/**
 * @param int $shareAcquireMode
 *
 * @return self
 */
public function setShareAcquireMode(int $shareAcquireMode): self
{
    $this->shareAcquireMode = $shareAcquireMode;

    return $this;
}
/**
 * @return bool
 */
public function getIsRenewAck(): bool
{
    return $this->isRenewAck;
}

/**
 * @param bool $isRenewAck
 *
 * @return self
 */
public function setIsRenewAck(bool $isRenewAck): self
{
    $this->isRenewAck = $isRenewAck;

    return $this;
}
/**
 * @return FetchTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param FetchTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return ForgottenTopic[]
 */
public function getForgottenTopicsData(): array
{
    return $this->forgottenTopicsData;
}

/**
 * @param ForgottenTopic[] $forgottenTopicsData
 *
 * @return self
 */
public function setForgottenTopicsData(array $forgottenTopicsData): self
{
    $this->forgottenTopicsData = $forgottenTopicsData;

    return $this;
}

}