<?php

namespace KennerSoft\Merge;

use KennerSoft\Model\AbstractRobot;
use KennerSoft\Model\Robot2;

class MergeRoot extends AbstractMerge
{

    public function mergeRobots()
    {
        $class_name  = get_class($this->robots[0]);
        $robot_merge = new $class_name;
        foreach ($this->robots as $robot) {
            if($robot_merge->getSpeed() < $robot->getSpeed()){
                $robot_merge->setSpeed($robot->getSpeed());
            }
            $robot_merge->setWeight($robot_merge->getWeight() + $robot->getWeight());
        }

        return $robot_merge;
    }

}