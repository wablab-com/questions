<?php

namespace WabLab\Questions\Traits;

trait HasPoints
{
    /**
     * @var int
     */
    protected $points;

    public function setPoints(int $points)
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }
}