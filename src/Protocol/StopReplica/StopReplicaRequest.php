<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StopReplica;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class StopReplicaRequest extends AbstractRequest
{
    

    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            
        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 5;
}

public function getMaxSupportedVersion(): int
{
    return 0;
}

public function getFlexibleVersions(): array
{
    return [];
}


    
}