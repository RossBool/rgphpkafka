<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\PushTelemetry;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class PushTelemetryRequest extends AbstractRequest
{
    /**
 * Unique id for this client instance.
 *
 * @var string
 */
protected $clientInstanceId = '';

/**
 * Unique identifier for the current subscription.
 *
 * @var int
 */
protected $subscriptionId = 0;

/**
 * Client is terminating the connection.
 *
 * @var bool
 */
protected $terminating = false;

/**
 * Compression codec used to compress the metrics.
 *
 * @var int
 */
protected $compressionType = 0;

/**
 * Metrics encoded in OpenTelemetry MetricsData v1 protobuf format.
 *
 * @var string
 */
protected $metrics = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clientInstanceId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('subscriptionId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('terminating', 'bool', false, [0], [0], [], [], null),
new ProtocolField('compressionType', 'int8', false, [0], [0], [], [], null),
new ProtocolField('metrics', 'bytes', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 72;
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
/**
 * @return int
 */
public function getSubscriptionId(): int
{
    return $this->subscriptionId;
}

/**
 * @param int $subscriptionId
 *
 * @return self
 */
public function setSubscriptionId(int $subscriptionId): self
{
    $this->subscriptionId = $subscriptionId;

    return $this;
}
/**
 * @return bool
 */
public function getTerminating(): bool
{
    return $this->terminating;
}

/**
 * @param bool $terminating
 *
 * @return self
 */
public function setTerminating(bool $terminating): self
{
    $this->terminating = $terminating;

    return $this;
}
/**
 * @return int
 */
public function getCompressionType(): int
{
    return $this->compressionType;
}

/**
 * @param int $compressionType
 *
 * @return self
 */
public function setCompressionType(int $compressionType): self
{
    $this->compressionType = $compressionType;

    return $this;
}
/**
 * @return string
 */
public function getMetrics(): string
{
    return $this->metrics;
}

/**
 * @param string $metrics
 *
 * @return self
 */
public function setMetrics(string $metrics): self
{
    $this->metrics = $metrics;

    return $this;
}

}