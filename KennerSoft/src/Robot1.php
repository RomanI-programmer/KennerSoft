<?php

namespace KennerSoft\src;


class Robot1 extends BaseRobot
{

    public $weight = 420;
    public $speed = 15;
    public $height = 5;

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