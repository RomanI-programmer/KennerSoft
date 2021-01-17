<?php

namespace KennerSoft\Factory;

use KennerSoft\Merge\AbstractMerge;
use KennerSoft\Model\AbstractRobot;
use KennerSoft\Model\Robot1;
use KennerSoft\Model\Robot2;

class FactoryRobot
{

    /**
     * @var AbstractRobot
     */
    public AbstractRobot $robot1;
    /**
     * @var AbstractRobot
     */
    public AbstractRobot $robot2;

    /**
     * @param AbstractRobot $robot1
     */
    public function setRobot1(AbstractRobot $robot1): self
    {
        $this->robot1 = $robot1;

        return $this;
    }

    /**
     * @param AbstractRobot $robot2
     */
    public function setRobot2(AbstractRobot $robot2): self
    {
        $this->robot2 = $robot2;

        return $this;
    }

    /**
     * Метод який добавляє новостворених роботів до масиву
     * Метод з модифікатором private, оскільки він використовується лише всередині поточного класу,
     * заборонено використовувати при створенні об"єкту
     * @param $count
     * @param $typeRobot
     * @return array
     */
    private function createRobots($count, $typeRobot)
    {
        $arrayRobots = [];
        for ($i = 0; $i < $count; $i++) {
            $arrayRobots[$i] = $typeRobot;
        }

        return $arrayRobots;
    }

    /**
     * @param int $count
     * @return array
     */
    public function createRobot1($count)
    {
        return $this->createRobots($count, $this->robot1);
    }

    /**
     * @param $count
     * @return array
     */
    public function createRobot2($count)
    {
        return $this->createRobots($count, $this->robot2);
    }


    public function createMergeRobot(AbstractMerge $merge)
    {
        return $merge->mergeRobots();
    }
}