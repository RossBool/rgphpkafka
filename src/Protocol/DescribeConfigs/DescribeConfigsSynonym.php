<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeConfigs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeConfigsSynonym extends AbstractStruct
{
    /**
 * The synonym name.
 *
 * @var string
 */
protected $name = '';

/**
 * The synonym value.
 *
 * @var string|null
 */
protected $value = null;

/**
 * The synonym source.
 *
 * @var int
 */
protected $source = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [1,2,3,4], [4], [], [], null),
new ProtocolField('value', 'string', false, [1,2,3,4], [4], [0,1,2,3,4], [], null),
new ProtocolField('source', 'int8', false, [1,2,3,4], [4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4];
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
/**
 * @return int
 */
public function getSource(): int
{
    return $this->source;
}

/**
 * @param int $source
 *
 * @return self
 */
public function setSource(int $source): self
{
    $this->source = $source;

    return $this;
}

}