<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\UpdateMetadata;

use longlang\phpkafka\Protocol\AbstractResponse;
use longlang\phpkafka\Protocol\ProtocolField;

class UpdateMetadataResponse extends AbstractResponse
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
    return 6;
}

public function getFlexibleVersions(): array
{
    return [];
}


    
}