<?php

namespace KennerSoft\Factory;


use KennerSoft\Model\Robot1;
use KennerSoft\Model\Robot2;

class FactoryRobot
{

    public $array_robots = [];
    public $robot_1;
    public $robot_2;

    /**
     * FactoryRobot constructor.
     */
    public function __construct()
    {
        $this->robot_1 = new Robot1();
        $this->robot_2 = new Robot2();
    }

    /**
     * Метод який добавляє новостворених роботів до масиву
     * Метод з модифікатором private, оскільки він використовується лише всередині поточного класу,
     * заборонено використовувати при створенні об"єкту
     * @param $count
     * @param $type_robot
     * @return array
     */
    private function AddNewRobots($count,$type_robot)
    {
        // Очищаю попередні дані
        $this->clearData();

        for($i = 0; $i < $count; $i++) {
            $this->array_robots[$i] = $type_robot;
        }

        return $this->array_robots;
    }

    /**
     * @param int $count
     * @return array
     */
    public function createRobot1($count)
    {
        return $this->AddNewRobots($count,$this->robot_1);
    }

    /**
     * @param $count
     * @return array
     */
    public function createRobot2($count)
    {
        return $this->AddNewRobots($count,$this->robot_2);
    }

    public function clearData()
    {
        $this->array_robots = [];
    }

}