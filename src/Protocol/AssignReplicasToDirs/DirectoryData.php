<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AssignReplicasToDirs;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DirectoryData extends AbstractStruct
{
    /**
 * The ID of the directory.
 *
 * @var string
 */
protected $id = '';

/**
 * The topics assigned to the directory.
 *
 * @var TopicData[]
 */
protected $topics = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('id', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('topics', TopicData::class, true, [0], [0], [], [], null),

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
public function getId(): string
{
    return $this->id;
}

/**
 * @param string $id
 *
 * @return self
 */
public function setId(string $id): self
{
    $this->id = $id;

    return $this;
}
/**
 * @return TopicData[]
 */
public function getTopics(): array
{
    return $this->topics;
}

/**
 * @param TopicData[] $topics
 *
 * @return self
 */
public function setTopics(array $topics): self
{
    $this->topics = $topics;

    return $this;
}

}