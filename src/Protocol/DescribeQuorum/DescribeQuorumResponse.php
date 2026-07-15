<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeQuorum;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeQuorumResponse extends AbstractResponse
{
    /**
 * The top level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The response from the describe quorum API.
 *
 * @var TopicData[]
 */
protected $topics = [];

/**
 * The nodes in the quorum.
 *
 * @var Node[]
 */
protected $nodes = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [2], [0,1,2], [2], [], null),
new ProtocolField('topics', TopicData::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('nodes', Node::class, true, [2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 55;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
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
 * @return TopicData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return Node[]
 */
public function getNodes(): array
{
    return $this->nodes;
}

/**
 * @param Node[] $nodes
 *
 * @return self
 */
public function setNodes(array $nodes): self
{
    $this->nodes = $nodes;

    return $this;
}

}