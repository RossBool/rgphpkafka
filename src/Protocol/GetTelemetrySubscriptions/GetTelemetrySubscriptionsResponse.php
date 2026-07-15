<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\GetTelemetrySubscriptions;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class GetTelemetrySubscriptionsResponse extends AbstractResponse
{
    /**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * Assigned client instance id if ClientInstanceId was 0 in the request, else 0.
 *
 * @var string
 */
protected $clientInstanceId = '';

/**
 * Unique identifier for the current subscription set for this client instance.
 *
 * @var int
 */
protected $subscriptionId = 0;

/**
 * Compression types that broker accepts for the PushTelemetryRequest.
 *
 * @var int[]
 */
protected $acceptedCompressionTypes = [];

/**
 * Configured push interval, which is the lowest configured interval in the current subscription set.
 *
 * @var int
 */
protected $pushIntervalMs = 0;

/**
 * The maximum bytes of binary data the broker accepts in PushTelemetryRequest.
 *
 * @var int
 */
protected $telemetryMaxBytes = 0;

/**
 * Flag to indicate monotonic/counter metrics are to be emitted as deltas or cumulative values.
 *
 * @var bool
 */
protected $deltaTemporality = false;

/**
 * Requested metrics prefix string match. Empty array: No metrics subscribed, Array[0] empty string: All metrics subscribed.
 *
 * @var string[]
 */
protected $requestedMetrics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('throttleTimeMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [0], [], [], null),
new ProtocolField('clientInstanceId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('subscriptionId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('acceptedCompressionTypes', 'int8', true, [0], [0], [], [], null),
new ProtocolField('pushIntervalMs', 'int32', false, [0], [0], [], [], null),
new ProtocolField('telemetryMaxBytes', 'int32', false, [0], [0], [], [], null),
new ProtocolField('deltaTemporality', 'bool', false, [0], [0], [], [], null),
new ProtocolField('requestedMetrics', 'string', true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 71;
}

public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return int
 */
public function getThrottleTimeMs(): int
{
    return $this->throttleTimeMs;
}

/**
 * @param int $throttleTimeMs
 *
 * @return self
 */
public function setThrottleTimeMs(int $throttleTimeMs): self
{
    $this->throttleTimeMs = $throttleTimeMs;

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
 * @return int[]
 */
public function getAcceptedCompressionTypes(): array
{
    return $this->acceptedCompressionTypes;
}

/**
 * @param int[] $acceptedCompressionTypes
 *
 * @return self
 */
public function setAcceptedCompressionTypes(array $acceptedCompressionTypes): self
{
    $this->acceptedCompressionTypes = $acceptedCompressionTypes;

    return $this;
}
/**
 * @return int
 */
public function getPushIntervalMs(): int
{
    return $this->pushIntervalMs;
}

/**
 * @param int $pushIntervalMs
 *
 * @return self
 */
public function setPushIntervalMs(int $pushIntervalMs): self
{
    $this->pushIntervalMs = $pushIntervalMs;

    return $this;
}
/**
 * @return int
 */
public function getTelemetryMaxBytes(): int
{
    return $this->telemetryMaxBytes;
}

/**
 * @param int $telemetryMaxBytes
 *
 * @return self
 */
public function setTelemetryMaxBytes(int $telemetryMaxBytes): self
{
    $this->telemetryMaxBytes = $telemetryMaxBytes;

    return $this;
}
/**
 * @return bool
 */
public function getDeltaTemporality(): bool
{
    return $this->deltaTemporality;
}

/**
 * @param bool $deltaTemporality
 *
 * @return self
 */
public function setDeltaTemporality(bool $deltaTemporality): self
{
    $this->deltaTemporality = $deltaTemporality;

    return $this;
}
/**
 * @return string[]
 */
public function getRequestedMetrics(): array
{
    return $this->requestedMetrics;
}

/**
 * @param string[] $requestedMetrics
 *
 * @return self
 */
public function setRequestedMetrics(array $requestedMetrics): self
{
    $this->requestedMetrics = $requestedMetrics;

    return $this;
}

}