<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\EndQuorumEpoch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ReplicaInfo extends AbstractStruct
{
    /**
 * The ID of the candidate replica.
 *
 * @var int
 */
protected $candidateId = 0;

/**
 * The directory ID of the candidate replica.
 *
 * @var string
 */
protected $candidateDirectoryId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('candidateId', 'int32', false, [1], [1], [], [], null),
new ProtocolField('candidateDirectoryId', 'uuid', false, [1], [1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [1];
}


    /**
 * @return int
 */
public function getCandidateId(): int
{
    return $this->candidateId;
}

/**
 * @param int $candidateId
 *
 * @return self
 */
public function setCandidateId(int $candidateId): self
{
    $this->candidateId = $candidateId;

    return $this;
}
/**
 * @return string
 */
public function getCandidateDirectoryId(): string
{
    return $this->candidateDirectoryId;
}

/**
 * @param string $candidateDirectoryId
 *
 * @return self
 */
public function setCandidateDirectoryId(string $candidateDirectoryId): self
{
    $this->candidateDirectoryId = $candidateDirectoryId;

    return $this;
}

}