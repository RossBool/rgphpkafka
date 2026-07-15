<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareAcknowledge;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ShareAcknowledgeRequest extends AbstractRequest
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
 * Whether Renew type acknowledgements present in AcknowledgementBatches.
 *
 * @var bool
 */
protected $isRenewAck = false;

/**
 * The topics containing records to acknowledge.
 *
 * @var AcknowledgeTopic[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('groupId', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('memberId', 'string', false, [0,1,2], [0,1,2], [0,1,2], [], null),
new ProtocolField('shareSessionEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('isRenewAck', 'bool', false, [2], [0,1,2], [], [], null),
new ProtocolField('topics', AcknowledgeTopic::class, true, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 79;
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
 * @return AcknowledgeTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param AcknowledgeTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}