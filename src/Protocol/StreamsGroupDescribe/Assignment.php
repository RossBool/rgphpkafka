<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Assignment extends AbstractStruct
{
    /**
 * Active tasks for this client.
 *
 * @var TaskIds[]
 */
protected $activeTasks = [];

/**
 * Standby tasks for this client.
 *
 * @var TaskIds[]
 */
protected $standbyTasks = [];

/**
 * Warm-up tasks for this client. 
 *
 * @var TaskIds[]
 */
protected $warmupTasks = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('activeTasks', TaskIds::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('standbyTasks', TaskIds::class, true, [0,1], [0,1], [], [], null),
new ProtocolField('warmupTasks', TaskIds::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return TaskIds[]
 */
public function getActiveTasks(): array
{
    return $this->activeTasks;
}

/**
 * @param TaskIds[] $activeTasks
 *
 * @return self
 */
public function setActiveTasks(array $activeTasks): self
{
    $this->activeTasks = $activeTasks;

    return $this;
}
/**
 * @return TaskIds[]
 */
public function getStandbyTasks(): array
{
    return $this->standbyTasks;
}

/**
 * @param TaskIds[] $standbyTasks
 *
 * @return self
 */
public function setStandbyTasks(array $standbyTasks): self
{
    $this->standbyTasks = $standbyTasks;

    return $this;
}
/**
 * @return TaskIds[]
 */
public function getWarmupTasks(): array
{
    return $this->warmupTasks;
}

/**
 * @param TaskIds[] $warmupTasks
 *
 * @return self
 */
public function setWarmupTasks(array $warmupTasks): self
{
    $this->warmupTasks = $warmupTasks;

    return $this;
}

}