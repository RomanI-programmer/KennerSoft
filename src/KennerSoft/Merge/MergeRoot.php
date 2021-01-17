<?php

namespace KennerSoft\Merge;

use KennerSoft\Model\AbstractRobot;

/**
 * Class MergeRoot
 * @package KennerSoft\Merge
 */
class MergeRoot extends AbstractMerge
{

    /**
     * @return AbstractRobot|null
     */
    public function mergeRobots() : ?AbstractRobot
    {
        if(!empty($this->robots)){
            $class_name  = get_class(reset($this->robots));
            $robot_merge = new $class_name;
            foreach ($this->robots as $robot) {
                if($robot_merge->getSpeed() > $robot->getSpeed()){
                    $robot_merge->setSpeed($robot->getSpeed());
                }
                $robot_merge->setWeight($robot_merge->getWeight() + $robot->getWeight());
            }

            return $robot_merge;
        }

        return null;
    }
}