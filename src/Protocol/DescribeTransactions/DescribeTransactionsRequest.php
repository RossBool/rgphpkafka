<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTransactions;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeTransactionsRequest extends AbstractRequest
{
    /**
 * Array of transactionalIds to include in describe results. If empty, then no results will be returned.
 *
 * @var string[]
 */
protected $transactionalIds = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('transactionalIds', 'string', true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 65;
}

public function getMaxSupportedVersion(): int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string[]
 */
public function getTransactionalIds(): array
{
    return $this->transactionalIds;
}

/**
 * @param string[] $transactionalIds
 *
 * @return self
 */
public function setTransactionalIds(array $transactionalIds): self
{
    $this->transactionalIds = $transactionalIds;

    return $this;
}

}