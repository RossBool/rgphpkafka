<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\CreateTopics;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class CreatableTopicConfig extends AbstractStruct
{
    /**
 * The configuration name.
 *
 * @var string
 */
protected $name = '';

/**
 * The configuration value.
 *
 * @var string|null
 */
protected $value = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7], [5,6,7], [], [], null),
new ProtocolField('value', 'string', false, [0,1,2,3,4,5,6,7], [5,6,7], [0,1,2,3,4,5,6,7], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [5,6,7];
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
 * @return string|null
 */
public function getValue(): ?string
{
    return $this->value;
}

/**
 * @param string|null $value
 *
 * @return self
 */
public function setValue(?string $value): self
{
    $this->value = $value;

    return $this;
}

}