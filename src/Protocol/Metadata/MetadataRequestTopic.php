<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Metadata;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MetadataRequestTopic extends AbstractStruct
{
    /**
 * The topic id.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The topic name.
 *
 * @var string|null
 */
protected $name = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicId', 'uuid', false, [10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [10,11,12,13], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
}


    /**
 * @return string
 */
public function getTopicId(): string
{
    return $this->topicId;
}

/**
 * @param string $topicId
 *
 * @return self
 */
public function setTopicId(string $topicId): self
{
    $this->topicId = $topicId;

    return $this;
}
/**
 * @return string|null
 */
public function getName(): ?string
{
    return $this->name;
}

/**
 * @param string|null $name
 *
 * @return self
 */
public function setName(?string $name): self
{
    $this->name = $name;

    return $this;
}

}