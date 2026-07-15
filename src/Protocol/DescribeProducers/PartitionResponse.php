<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeProducers;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionResponse extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The partition error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The partition error message, which may be null if no additional details are available.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The active producers for the partition.
 *
 * @var ProducerState[]
 */
protected $activeProducers = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0], [0], [0], [], null),
new ProtocolField('activeProducers', ProducerState::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
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
 * @return ProducerState[]
 */
public function getActiveProducers(): array
{
    return $this->activeProducers;
}

/**
 * @param ProducerState[] $activeProducers
 *
 * @return self
 */
public function setActiveProducers(array $activeProducers): self
{
    $this->activeProducers = $activeProducers;

    return $this;
}

}