<?php

namespace KennerSoft\Merge;

use KennerSoft\Model\AbstractRobot;

/**
 * Class AbstractMerge
 * @package KennerSoft\Merge
 */
abstract class AbstractMerge
{

    /**
     * @var array
     */
    protected array $robots = [];

    /**
     * @return array
     */
    public function getRobots(): array
    {
        return $this->robots;
    }

    /**
     * @param AbstractRobot $robot
     * @return $this
     */
    public function addRobot(AbstractRobot $robot) : self
    {
        if ($this->checkRobotType($robot)) {
            $this->robots[] = $robot;
        }

        return $this;
    }

    /**
     * @param array $robots
     * @return $this
     */
    public function addRobots(array $robots) : self
    {
        $this->robots = [];

        foreach ($robots as $robot) {
            $this->addRobot($robot);
        }

        return $this;
    }

    /**
     * @param AbstractRobot $robot
     * @return bool
     */
    protected function checkRobotType(AbstractRobot $robot) : bool
    {
        foreach ($this->robots as $r) {
            if (get_class($r) !== get_class($robot)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return mixed
     */
    abstract public function mergeRobots();

}