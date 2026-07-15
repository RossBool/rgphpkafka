<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\TxnOffsetCommit;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class TxnOffsetCommitRequest extends AbstractRequest
{
    /**
 * The ID of the transaction.
 *
 * @var string
 */
protected $transactionalId = '';

/**
 * The ID of the group.
 *
 * @var string
 */
protected $groupId = '';

/**
 * The current producer ID in use by the transactional ID.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The current epoch associated with the producer ID.
 *
 * @var int
 */
protected $producerEpoch = 0;

/**
 * The generation of the group if using the classic group protocol or the member epoch if using the consumer protocol.
 *
 * @var int
 */
protected $generationIdOrMemberEpoch = -1;

/**
 * The member ID assigned by the group coordinator.
 *
 * @var string
 */
protected $memberId = '';

/**
 * The unique identifier of the consumer instance provided by end user.
 *
 * @var string|null
 */
protected $groupInstanceId = null;

/**
 * Each topic that we want to commit offsets for.
 *
 * @var TxnOffsetCommitRequestTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('groupId', 'string', false, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('producerId', 'int64', false, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('producerEpoch', 'int16', false, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('generationIdOrMemberEpoch', 'int32', false, [3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('memberId', 'string', false, [3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('groupInstanceId', 'string', false, [3,4,5,6], [3,4,5,6], [3,4,5,6], [], null),
new ProtocolField('topics', TxnOffsetCommitRequestTopic::class, true, [0,1,2,3,4,5,6], [3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 28;
}

public function getMaxSupportedVersion(): int
{
    return 6;
}

public function getFlexibleVersions(): array
{
    return [3,4,5,6];
}


    /**
 * @return string
 */
public function getTransactionalId(): string
{
    return $this->transactionalId;
}

/**
 * @param string $transactionalId
 *
 * @return self
 */
public function setTransactionalId(string $transactionalId): self
{
    $this->transactionalId = $transactionalId;

    return $this;
}
/**
 * @return string
 */
public function getGroupId(): string
{
    return $this->groupId;
}

/**
 * @param string $groupId
 *
 * @return self
 */
public function setGroupId(string $groupId): self
{
    $this->groupId = $groupId;

    return $this;
}
/**
 * @return int
 */
public function getProducerId(): int
{
    return $this->producerId;
}

/**
 * @param int $producerId
 *
 * @return self
 */
public function setProducerId(int $producerId): self
{
    $this->producerId = $producerId;

    return $this;
}
/**
 * @return int
 */
public function getProducerEpoch(): int
{
    return $this->producerEpoch;
}

/**
 * @param int $producerEpoch
 *
 * @return self
 */
public function setProducerEpoch(int $producerEpoch): self
{
    $this->producerEpoch = $producerEpoch;

    return $this;
}
/**
 * @return int
 */
public function getGenerationIdOrMemberEpoch(): int
{
    return $this->generationIdOrMemberEpoch;
}

/**
 * @param int $generationIdOrMemberEpoch
 *
 * @return self
 */
public function setGenerationIdOrMemberEpoch(int $generationIdOrMemberEpoch): self
{
    $this->generationIdOrMemberEpoch = $generationIdOrMemberEpoch;

    return $this;
}
/**
 * @return string
 */
public function getMemberId(): string
{
    return $this->memberId;
}

/**
 * @param string $memberId
 *
 * @return self
 */
public function setMemberId(string $memberId): self
{
    $this->memberId = $memberId;

    return $this;
}
/**
 * @return string|null
 */
public function getGroupInstanceId(): ?string
{
    return $this->groupInstanceId;
}

/**
 * @param string|null $groupInstanceId
 *
 * @return self
 */
public function setGroupInstanceId(?string $groupInstanceId): self
{
    $this->groupInstanceId = $groupInstanceId;

    return $this;
}
/**
 * @return TxnOffsetCommitRequestTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TxnOffsetCommitRequestTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}