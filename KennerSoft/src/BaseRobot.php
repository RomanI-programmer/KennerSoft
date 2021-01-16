<?php

namespace KennerSoft\src;

/**
 * @var $weight
 * @var $speed
 * @var $height
 */

abstract class BaseRobot
{

    public $weight;
    public $speed;
    public $height;

    /**
     * Для гнучкості коду, використовую абстрактні get-методи, щоб відокремити логіку роботів в разі потреби.
     * @return mixed
     */
    abstract public function getWeight();
    abstract public function getSpeed();
    abstract public function getHeight();

}