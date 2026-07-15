<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateFeatures;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class UpdateFeaturesRequest extends AbstractRequest
{
    /**
 * How long to wait in milliseconds before timing out the request.
 *
 * @var int
 */
protected $timeoutMs = 60000;

/**
 * The list of updates to finalized features.
 *
 * @var FeatureUpdateKey[]
 */
protected $featureUpdates = [];

/**
 * True if we should validate the request, but not perform the upgrade or downgrade.
 *
 * @var bool
 */
protected $validateOnly = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('timeoutMs', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('featureUpdates', FeatureUpdateKey::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('validateOnly', 'bool', false, [1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 57;
}

public function getMaxSupportedVersion(): int
{
    return 2;
}

public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return int
 */
public function getTimeoutMs(): int
{
    return $this->timeoutMs;
}

/**
 * @param int $timeoutMs
 *
 * @return self
 */
public function setTimeoutMs(int $timeoutMs): self
{
    $this->timeoutMs = $timeoutMs;

    return $this;
}
/**
 * @return FeatureUpdateKey[]
 */
public function getFeatureUpdates(): array
{
    return $this->featureUpdates;
}

/**
 * @param FeatureUpdateKey[] $featureUpdates
 *
 * @return self
 */
public function setFeatureUpdates(array $featureUpdates): self
{
    $this->featureUpdates = $featureUpdates;

    return $this;
}
/**
 * @return bool
 */
public function getValidateOnly(): bool
{
    return $this->validateOnly;
}

/**
 * @param bool $validateOnly
 *
 * @return self
 */
public function setValidateOnly(bool $validateOnly): self
{
    $this->validateOnly = $validateOnly;

    return $this;
}

}