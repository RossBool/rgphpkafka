<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ControlledShutdown;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class ControlledShutdownResponse extends AbstractResponse
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
    return 7;
}

public function getFlexibleVersions(): array
{
    return [];
}


    
}