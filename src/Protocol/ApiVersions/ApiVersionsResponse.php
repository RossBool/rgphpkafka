<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ApiVersions;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ApiVersionsResponse extends AbstractResponse
{
    /**
 * The top-level error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The APIs supported by the broker.
 *
 * @var ApiVersion[]
 */
protected $apiKeys = [];

/**
 * The duration in milliseconds for which the request was throttled due to a quota violation, or zero if the request did not violate any quota.
 *
 * @var int
 */
protected $throttleTimeMs = 0;

/**
 * Features supported by the broker. Note: in v0-v3, features with MinSupportedVersion = 0 are omitted.
 *
 * @var SupportedFeatureKey[]
 */
protected $supportedFeatures = [];

/**
 * The monotonically increasing epoch for the finalized features information. Valid values are >= 0. A value of -1 is special and represents unknown epoch.
 *
 * @var int
 */
protected $finalizedFeaturesEpoch = -1;

/**
 * List of cluster-wide finalized features. The information is valid only if FinalizedFeaturesEpoch >= 0.
 *
 * @var FinalizedFeatureKey[]
 */
protected $finalizedFeatures = [];

/**
 * Set by a KRaft controller if the required configurations for ZK migration are present.
 *
 * @var bool
 */
protected $zkMigrationReady = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('apiKeys', ApiVersion::class, true, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('throttleTimeMs', 'int32', false, [1,2,3,4,5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('supportedFeatures', SupportedFeatureKey::class, true, [3,4,5], [3,4,5], [], [3,4,5], 0),
new ProtocolField('finalizedFeaturesEpoch', 'int64', false, [3,4,5], [3,4,5], [], [3,4,5], 1),
new ProtocolField('finalizedFeatures', FinalizedFeatureKey::class, true, [3,4,5], [3,4,5], [], [3,4,5], 2),
new ProtocolField('zkMigrationReady', 'bool', false, [3,4,5], [3,4,5], [], [3,4,5], 3),

        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 18;
}

public function getFlexibleVersions(): array
{
    return [3,4,5];
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
 * @return ApiVersion[]
 */
public function getApiKeys(): array
{
    return $this->apiKeys;
}

/**
 * @param ApiVersion[] $apiKeys
 *
 * @return self
 */
public function setApiKeys(array $apiKeys): self
{
    $this->apiKeys = $apiKeys;

    return $this;
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
 * @return SupportedFeatureKey[]
 */
public function getSupportedFeatures(): array
{
    return $this->supportedFeatures;
}

/**
 * @param SupportedFeatureKey[] $supportedFeatures
 *
 * @return self
 */
public function setSupportedFeatures(array $supportedFeatures): self
{
    $this->supportedFeatures = $supportedFeatures;

    return $this;
}
/**
 * @return int
 */
public function getFinalizedFeaturesEpoch(): int
{
    return $this->finalizedFeaturesEpoch;
}

/**
 * @param int $finalizedFeaturesEpoch
 *
 * @return self
 */
public function setFinalizedFeaturesEpoch(int $finalizedFeaturesEpoch): self
{
    $this->finalizedFeaturesEpoch = $finalizedFeaturesEpoch;

    return $this;
}
/**
 * @return FinalizedFeatureKey[]
 */
public function getFinalizedFeatures(): array
{
    return $this->finalizedFeatures;
}

/**
 * @param FinalizedFeatureKey[] $finalizedFeatures
 *
 * @return self
 */
public function setFinalizedFeatures(array $finalizedFeatures): self
{
    $this->finalizedFeatures = $finalizedFeatures;

    return $this;
}
/**
 * @return bool
 */
public function getZkMigrationReady(): bool
{
    return $this->zkMigrationReady;
}

/**
 * @param bool $zkMigrationReady
 *
 * @return self
 */
public function setZkMigrationReady(bool $zkMigrationReady): self
{
    $this->zkMigrationReady = $zkMigrationReady;

    return $this;
}

}