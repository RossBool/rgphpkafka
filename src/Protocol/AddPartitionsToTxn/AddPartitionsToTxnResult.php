<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnResult extends AbstractStruct
{
    /**
 * The transactional id corresponding to the transaction.
 *
 * @var string
 */
protected $transactionalId = '';

/**
 * The results for each topic.
 *
 * @var AddPartitionsToTxnTopicResult[]
 */
protected $topicResults = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalId', 'string', false, [4,5], [3,4,5], [], [], null),
new ProtocolField('topicResults', AddPartitionsToTxnTopicResult::class, true, [4,5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5];
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
 * @return AddPartitionsToTxnTopicResult[]
 */
public function getTopicResults(): array
{
    return $this->topicResults;
}

/**
 * @param AddPartitionsToTxnTopicResult[] $topicResults
 *
 * @return self
 */
public function setTopicResults(array $topicResults): self
{
    $this->topicResults = $topicResults;

    return $this;
}

}