<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\HasPoints as HasPoint;

class HasPoints implements HasPoint
{
    /**
     * @var int
     */
    protected $points;

    /**
     * @var array
     */
    protected $properties;

    /**
     * @param int $points
     */
    public function setPoints(int $points) :void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPoints() :int
    {
        return $this->points;
    }

    /**
     * @param array $properties
     */
    public function setProperties(array $properties) :void
    {
        $this->properties = $properties;
    }

    /**
     * @return array
     */
    public function getProperties() :array
    {
       return $this->properties;
    }
}