<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Envelope;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class EnvelopeResponse extends AbstractResponse
{
    /**
 * The embedded response header and data.
 *
 * @var string|null
 */
protected $responseData = null;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('responseData', 'bytes', false, [0], [0], [0], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 58;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string|null
 */
public function getResponseData(): ?string
{
    return $this->responseData;
}

/**
 * @param string|null $responseData
 *
 * @return self
 */
public function setResponseData(?string $responseData): self
{
    $this->responseData = $responseData;

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

}