<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ProduceRequest extends AbstractRequest
{
    /**
 * The transactional ID, or null if the producer is not transactional.
 *
 * @var string|null
 */
protected $transactionalId = null;

/**
 * The number of acknowledgments the producer requires the leader to have received before considering a request complete. Allowed values: 0 for no acknowledgments, 1 for only the leader and -1 for the full ISR.
 *
 * @var int
 */
protected $acks = 0;

/**
 * The timeout to await a response in milliseconds.
 *
 * @var int
 */
protected $timeoutMs = 0;

/**
 * Each topic to produce to.
 *
 * @var TopicProduceData[]
 */
protected $topicData = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [3,4,5,6,7,8,9,10,11,12,13], [], null),
new ProtocolField('acks', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('timeoutMs', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('topicData', TopicProduceData::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 0;
}

public function getMaxSupportedVersion(): int
{
    return 13;
}

public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
}


    /**
 * @return string|null
 */
public function getTransactionalId(): ?string
{
    return $this->transactionalId;
}

/**
 * @param string|null $transactionalId
 *
 * @return self
 */
public function setTransactionalId(?string $transactionalId): self
{
    $this->transactionalId = $transactionalId;

    return $this;
}
/**
 * @return int
 */
public function getAcks(): int
{
    return $this->acks;
}

/**
 * @param int $acks
 *
 * @return self
 */
public function setAcks(int $acks): self
{
    $this->acks = $acks;

    return $this;
}
/**
 * @return int
 */
public function getTimeoutMs(): int
{
    return $this->timeoutMs;
}

/**
 * @param int $timeoutMs
 *
 * @return self
 */
public function setTimeoutMs(int $timeoutMs): self
{
    $this->timeoutMs = $timeoutMs;

    return $this;
}
/**
 * @return TopicProduceData[]
 */
public function getTopicData(): array
{
    return $this->topicData;
}

/**
 * @param TopicProduceData[] $topicData
 *
 * @return self
 */
public function setTopicData(array $topicData): self
{
    $this->topicData = $topicData;

    return $this;
}

}