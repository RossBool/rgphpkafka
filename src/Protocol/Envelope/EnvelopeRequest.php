<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Envelope;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class EnvelopeRequest extends AbstractRequest
{
    /**
 * The embedded request header and data.
 *
 * @var string
 */
protected $requestData = '';

/**
 * Value of the initial client principal when the request is redirected by a broker.
 *
 * @var string|null
 */
protected $requestPrincipal = null;

/**
 * The original client's address in bytes.
 *
 * @var string
 */
protected $clientHostAddress = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('requestData', 'bytes', false, [0], [0], [], [], null),
new ProtocolField('requestPrincipal', 'bytes', false, [0], [0], [0], [], null),
new ProtocolField('clientHostAddress', 'bytes', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 58;
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
 * @return string
 */
public function getRequestData(): string
{
    return $this->requestData;
}

/**
 * @param string $requestData
 *
 * @return self
 */
public function setRequestData(string $requestData): self
{
    $this->requestData = $requestData;

    return $this;
}
/**
 * @return string|null
 */
public function getRequestPrincipal(): ?string
{
    return $this->requestPrincipal;
}

/**
 * @param string|null $requestPrincipal
 *
 * @return self
 */
public function setRequestPrincipal(?string $requestPrincipal): self
{
    $this->requestPrincipal = $requestPrincipal;

    return $this;
}
/**
 * @return string
 */
public function getClientHostAddress(): string
{
    return $this->clientHostAddress;
}

/**
 * @param string $clientHostAddress
 *
 * @return self
 */
public function setClientHostAddress(string $clientHostAddress): self
{
    $this->clientHostAddress = $clientHostAddress;

    return $this;
}

}