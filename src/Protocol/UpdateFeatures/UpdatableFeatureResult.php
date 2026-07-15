<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateFeatures;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class UpdatableFeatureResult extends AbstractStruct
{
    /**
 * The name of the finalized feature.
 *
 * @var string
 */
protected $feature = '';

/**
 * The feature update error code or `0` if the feature update succeeded.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The feature update error, or `null` if the feature update succeeded.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('feature', 'string', false, [0,1], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1,2], [0,1], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
}


    /**
 * @return string
 */
public function getFeature(): string
{
    return $this->feature;
}

/**
 * @param string $feature
 *
 * @return self
 */
public function setFeature(string $feature): self
{
    $this->feature = $feature;

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

}