<?php

namespace KennerSoft\Model;

/**
 * @var $weight
 * @var $speed
 * @var $height
 */
abstract class AbstractRobot
{

    /**
     * @var int
     */
    protected int $weight;
    /**
     * @var int
     */
    protected int $speed;
    /**
     * @var int
     */
    protected int $height;

    /**
     * AbstractRobot constructor.
     * @param int $weight
     * @param int $speed
     * @param int $height
     */
    public function __construct(int $weight = 0, int $speed = 0, int $height = 0)
    {
        $this->weight = $weight;
        $this->speed = $speed;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }


}