<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DeleteShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DeleteShareGroupOffsetsRequestTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topicName = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0], [0], [], [], null),

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
public function getTopicName(): string
{
    return $this->topicName;
}

/**
 * @param string $topicName
 *
 * @return self
 */
public function setTopicName(string $topicName): self
{
    $this->topicName = $topicName;

    return $this;
}

}