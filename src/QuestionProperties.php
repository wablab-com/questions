<?php


namespace WabLab\Questions;


use WabLab\Questions\Contracts\QuestionProperty;
use \WabLab\Questions\Contracts\QuestionProperties as QuestionPropertiesInterface;
class QuestionProperties implements QuestionPropertiesInterface
{
    protected $properties = [];

    public function addProperty(QuestionProperty $questionProperty){
        $this->properties[] = $questionProperty;
    }
}