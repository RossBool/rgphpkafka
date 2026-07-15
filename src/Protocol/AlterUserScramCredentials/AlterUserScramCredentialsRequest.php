<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterUserScramCredentialsRequest extends AbstractRequest
{
    /**
 * The SCRAM credentials to remove.
 *
 * @var ScramCredentialDeletion[]
 */
protected $deletions = [];

/**
 * The SCRAM credentials to update/insert.
 *
 * @var ScramCredentialUpsertion[]
 */
protected $upsertions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('deletions', ScramCredentialDeletion::class, true, [0], [0], [], [], null),
new ProtocolField('upsertions', ScramCredentialUpsertion::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 51;
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
 * @return ScramCredentialDeletion[]
 */
public function getDeletions(): array
{
    return $this->deletions;
}

/**
 * @param ScramCredentialDeletion[] $deletions
 *
 * @return self
 */
public function setDeletions(array $deletions): self
{
    $this->deletions = $deletions;

    return $this;
}
/**
 * @return ScramCredentialUpsertion[]
 */
public function getUpsertions(): array
{
    return $this->upsertions;
}

/**
 * @param ScramCredentialUpsertion[] $upsertions
 *
 * @return self
 */
public function setUpsertions(array $upsertions): self
{
    $this->upsertions = $upsertions;

    return $this;
}

}