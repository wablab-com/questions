<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\StringComponent as StringComponents;

class StringComponent implements StringComponents
{
    /**
     * @var string
     */
    protected $text;
    /**
     * @var array
     */
    protected $properties;

    /**
     * @param string $text
     */
    public function setText(string $text):void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText() :string
    {
        return $this->text;
    }

    /**
     * @param $properties
     */
    public function setProperties($properties):void
    {
        $this->properties = $properties;
    }

    /**
     * @return array
     */
    public function getProperties():array
    {
        return $this->properties;
    }
}