<?php


namespace WabLab\Questions;
use \WabLab\Questions\Contracts\QuestionProperty as QuestionProperties;

class QuestionProperty implements QuestionProperties
{
    /**
     * @var string
     */
    protected $propertyName;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var array
     */
    protected $properties;
    /**
     * @param string $propertyName
     * @param $value
     */
    public function set(string $propertyName,$value =null):void
    {
        $this->propertyName = $propertyName;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getPropertyName():string
    {
        return $this->propertyName;
    }

    /**
     * @return string
     */
    public function getPropertyValue(){
        return $this->value;
    }

    /**
     * @param array $properties
     */
    public function setProperties(array $properties):void
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