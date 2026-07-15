<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeUserScramCredentials;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CredentialInfo extends AbstractStruct
{
    /**
 * The SCRAM mechanism.
 *
 * @var int
 */
protected $mechanism = 0;

/**
 * The number of iterations used in the SCRAM credential.
 *
 * @var int
 */
protected $iterations = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('mechanism', 'int8', false, [0], [0], [], [], null),
new ProtocolField('iterations', 'int32', false, [0], [0], [], [], null),

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
/**
 * @return int
 */
public function getIterations(): int
{
    return $this->iterations;
}

/**
 * @param int $iterations
 *
 * @return self
 */
public function setIterations(int $iterations): self
{
    $this->iterations = $iterations;

    return $this;
}

}