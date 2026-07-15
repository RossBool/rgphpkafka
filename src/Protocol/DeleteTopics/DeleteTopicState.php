<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteTopics;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteTopicState extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string|null
 */
protected $name = null;

/**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [6], [4,5,6], [6], [], null),
new ProtocolField('topicId', 'uuid', false, [6], [4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4,5,6];
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

}