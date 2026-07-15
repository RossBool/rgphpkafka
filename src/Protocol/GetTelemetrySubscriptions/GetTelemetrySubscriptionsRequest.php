<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\GetTelemetrySubscriptions;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class GetTelemetrySubscriptionsRequest extends AbstractRequest
{
    /**
 * Unique id for this client instance, must be set to 0 on the first request.
 *
 * @var string
 */
protected $clientInstanceId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clientInstanceId', 'uuid', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 71;
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
public function getClientInstanceId(): string
{
    return $this->clientInstanceId;
}

/**
 * @param string $clientInstanceId
 *
 * @return self
 */
public function setClientInstanceId(string $clientInstanceId): self
{
    $this->clientInstanceId = $clientInstanceId;

    return $this;
}

}