<?php

namespace KennerSoft\Merge;

use KennerSoft\Model\AbstractRobot;
use KennerSoft\Model\Robot2;

class MergeRoot extends AbstractMerge
{

    public function mergeRobots()
    {
        $robot_merge = new Robot2();
        foreach ($this->robots as $robot) {
            if($robot_merge->getSpeed() < $robot->getSpeed()){
                $robot_merge->setSpeed($robot->getSpeed());
            }
            $robot_merge->setWeight($robot_merge->getWeight() + $robot->getWeight());
        }

        return $robot_merge;
    }

}