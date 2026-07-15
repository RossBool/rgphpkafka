<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ApiVersions;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class ApiVersionsRequest extends AbstractRequest
{
    /**
 * The name of the client.
 *
 * @var string
 */
protected $clientSoftwareName = '';

/**
 * The version of the client.
 *
 * @var string
 */
protected $clientSoftwareVersion = '';

/**
 * The cluster ID the client intends to connect to. Provide both ClusterId and NodeId, if known.
 *
 * @var string|null
 */
protected $clusterId = null;

/**
 * The node ID the client intends to connect to. Provide both ClusterId and NodeId, if known.
 *
 * @var int
 */
protected $nodeId = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('clientSoftwareName', 'string', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('clientSoftwareVersion', 'string', false, [3,4,5], [3,4,5], [], [], null),
new ProtocolField('clusterId', 'string', false, [5], [3,4,5], [5], [], null),
new ProtocolField('nodeId', 'int32', false, [5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 18;
}

public function getMaxSupportedVersion(): int
{
    return 5;
}

public function getFlexibleVersions(): array
{
    return [3,4,5];
}


    /**
 * @return string
 */
public function getClientSoftwareName(): string
{
    return $this->clientSoftwareName;
}

/**
 * @param string $clientSoftwareName
 *
 * @return self
 */
public function setClientSoftwareName(string $clientSoftwareName): self
{
    $this->clientSoftwareName = $clientSoftwareName;

    return $this;
}
/**
 * @return string
 */
public function getClientSoftwareVersion(): string
{
    return $this->clientSoftwareVersion;
}

/**
 * @param string $clientSoftwareVersion
 *
 * @return self
 */
public function setClientSoftwareVersion(string $clientSoftwareVersion): self
{
    $this->clientSoftwareVersion = $clientSoftwareVersion;

    return $this;
}
/**
 * @return string|null
 */
public function getClusterId(): ?string
{
    return $this->clusterId;
}

/**
 * @param string|null $clusterId
 *
 * @return self
 */
public function setClusterId(?string $clusterId): self
{
    $this->clusterId = $clusterId;

    return $this;
}
/**
 * @return int
 */
public function getNodeId(): int
{
    return $this->nodeId;
}

/**
 * @param int $nodeId
 *
 * @return self
 */
public function setNodeId(int $nodeId): self
{
    $this->nodeId = $nodeId;

    return $this;
}

}