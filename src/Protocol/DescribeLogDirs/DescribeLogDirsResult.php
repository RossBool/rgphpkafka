<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeLogDirs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeLogDirsResult extends AbstractStruct
{
    /**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The absolute log directory path.
 *
 * @var string
 */
protected $logDir = '';

/**
 * The topics.
 *
 * @var DescribeLogDirsTopic[]
 */
protected $topics = [];

/**
 * The total size in bytes of the volume the log directory is in. This value does not include the size of data stored in remote storage.
 *
 * @var int
 */
protected $totalBytes = -1;

/**
 * The usable size in bytes of the volume the log directory is in. This value does not include the size of data stored in remote storage.
 *
 * @var int
 */
protected $usableBytes = -1;

/**
 * True if this log directory is cordoned.
 *
 * @var bool
 */
protected $isCordoned = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5], [2,3,4,5], [], [], null),
new ProtocolField('logDir', 'string', false, [0,1,2,3,4,5], [2,3,4,5], [], [], null),
new ProtocolField('topics', DescribeLogDirsTopic::class, true, [0,1,2,3,4,5], [2,3,4,5], [], [], null),
new ProtocolField('totalBytes', 'int64', false, [4,5], [2,3,4,5], [], [], null),
new ProtocolField('usableBytes', 'int64', false, [4,5], [2,3,4,5], [], [], null),
new ProtocolField('isCordoned', 'bool', false, [5], [2,3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2,3,4,5];
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
 * @return string
 */
public function getLogDir(): string
{
    return $this->logDir;
}

/**
 * @param string $logDir
 *
 * @return self
 */
public function setLogDir(string $logDir): self
{
    $this->logDir = $logDir;

    return $this;
}
/**
 * @return DescribeLogDirsTopic[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param DescribeLogDirsTopic[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}
/**
 * @return int
 */
public function getTotalBytes(): int
{
    return $this->totalBytes;
}

/**
 * @param int $totalBytes
 *
 * @return self
 */
public function setTotalBytes(int $totalBytes): self
{
    $this->totalBytes = $totalBytes;

    return $this;
}
/**
 * @return int
 */
public function getUsableBytes(): int
{
    return $this->usableBytes;
}

/**
 * @param int $usableBytes
 *
 * @return self
 */
public function setUsableBytes(int $usableBytes): self
{
    $this->usableBytes = $usableBytes;

    return $this;
}
/**
 * @return bool
 */
public function getIsCordoned(): bool
{
    return $this->isCordoned;
}

/**
 * @param bool $isCordoned
 *
 * @return self
 */
public function setIsCordoned(bool $isCordoned): self
{
    $this->isCordoned = $isCordoned;

    return $this;
}

}