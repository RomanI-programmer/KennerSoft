<?php

namespace KennerSoft\src;


class Robot2 extends BaseRobot
{

    public $weight = 500;
    public $speed = 25;
    public $height = 10;

    public function getWeight()
    {
        return $this->weight;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getHeight()
    {
        return $this->height;
    }
}