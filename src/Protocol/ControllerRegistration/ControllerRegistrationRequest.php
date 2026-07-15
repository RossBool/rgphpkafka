<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ControllerRegistration;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ControllerRegistrationRequest extends AbstractRequest
{
    /**
 * The ID of the controller to register.
 *
 * @var int
 */
protected $controllerId = 0;

/**
 * The controller incarnation ID, which is unique to each process run.
 *
 * @var string
 */
protected $incarnationId = '';

/**
 * Set if the required configurations for ZK migration are present.
 *
 * @var bool
 */
protected $zkMigrationReady = false;

/**
 * The listeners of this controller.
 *
 * @var Listener[]
 */
protected $listeners = [];

/**
 * The features on this controller.
 *
 * @var Feature[]
 */
protected $features = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('controllerId', 'int32', false, [0], [0], [], [], null),
new ProtocolField('incarnationId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('zkMigrationReady', 'bool', false, [0], [0], [], [], null),
new ProtocolField('listeners', Listener::class, true, [0], [0], [], [], null),
new ProtocolField('features', Feature::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 70;
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
 * @return int
 */
public function getControllerId(): int
{
    return $this->controllerId;
}

/**
 * @param int $controllerId
 *
 * @return self
 */
public function setControllerId(int $controllerId): self
{
    $this->controllerId = $controllerId;

    return $this;
}
/**
 * @return string
 */
public function getIncarnationId(): string
{
    return $this->incarnationId;
}

/**
 * @param string $incarnationId
 *
 * @return self
 */
public function setIncarnationId(string $incarnationId): self
{
    $this->incarnationId = $incarnationId;

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
/**
 * @return Listener[]
 */
public function getListeners(): array
{
    return $this->listeners;
}

/**
 * @param Listener[] $listeners
 *
 * @return self
 */
public function setListeners(array $listeners): self
{
    $this->listeners = $listeners;

    return $this;
}
/**
 * @return Feature[]
 */
public function getFeatures(): array
{
    return $this->features;
}

/**
 * @param Feature[] $features
 *
 * @return self
 */
public function setFeatures(array $features): self
{
    $this->features = $features;

    return $this;
}

}