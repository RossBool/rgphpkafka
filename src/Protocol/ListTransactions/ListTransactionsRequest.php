<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListTransactions;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ListTransactionsRequest extends AbstractRequest
{
    /**
 * The transaction states to filter by: if empty, all transactions are returned; if non-empty, then only transactions matching one of the filtered states will be returned.
 *
 * @var string[]
 */
protected $stateFilters = [];

/**
 * The producerIds to filter by: if empty, all transactions will be returned; if non-empty, only transactions which match one of the filtered producerIds will be returned.
 *
 * @var int[]
 */
protected $producerIdFilters = [];

/**
 * Duration (in millis) to filter by: if < 0, all transactions will be returned; otherwise, only transactions running longer than this duration will be returned.
 *
 * @var int
 */
protected $durationFilter = -1;

/**
 * The transactional ID regular expression pattern to filter by: if it is empty or null, all transactions are returned; Otherwise then only the transactions matching the given regular expression will be returned.
 *
 * @var string|null
 */
protected $transactionalIdPattern = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('stateFilters', 'string', true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('producerIdFilters', 'int64', true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('durationFilter', 'int64', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('transactionalIdPattern', 'string', false, [2], [0,1,2], [2], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 66;
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
 * @return string[]
 */
public function getStateFilters(): array
{
    return $this->stateFilters;
}

/**
 * @param string[] $stateFilters
 *
 * @return self
 */
public function setStateFilters(array $stateFilters): self
{
    $this->stateFilters = $stateFilters;

    return $this;
}
/**
 * @return int[]
 */
public function getProducerIdFilters(): array
{
    return $this->producerIdFilters;
}

/**
 * @param int[] $producerIdFilters
 *
 * @return self
 */
public function setProducerIdFilters(array $producerIdFilters): self
{
    $this->producerIdFilters = $producerIdFilters;

    return $this;
}
/**
 * @return int
 */
public function getDurationFilter(): int
{
    return $this->durationFilter;
}

/**
 * @param int $durationFilter
 *
 * @return self
 */
public function setDurationFilter(int $durationFilter): self
{
    $this->durationFilter = $durationFilter;

    return $this;
}
/**
 * @return string|null
 */
public function getTransactionalIdPattern(): ?string
{
    return $this->transactionalIdPattern;
}

/**
 * @param string|null $transactionalIdPattern
 *
 * @return self
 */
public function setTransactionalIdPattern(?string $transactionalIdPattern): self
{
    $this->transactionalIdPattern = $transactionalIdPattern;

    return $this;
}

}