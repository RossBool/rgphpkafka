<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ScramCredentialDeletion extends AbstractStruct
{
    /**
 * The user name.
 *
 * @var string
 */
protected $name = '';

/**
 * The SCRAM mechanism.
 *
 * @var int
 */
protected $mechanism = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0], [0], [], [], null),
new ProtocolField('mechanism', 'int8', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string
 */
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

    return $this;
}
/**
 * @return int
 */
public function getMechanism(): int
{
    return $this->mechanism;
}

/**
 * @param int $mechanism
 *
 * @return self
 */
public function setMechanism(int $mechanism): self
{
    $this->mechanism = $mechanism;

    return $this;
}

}